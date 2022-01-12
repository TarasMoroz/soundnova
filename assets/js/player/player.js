// (function () {
// })();
Howl.prototype.changeSong = function (o) {
    var self = this;
    self.unload();
    self._duration = 0; // init duration
    self._sprite = {}; // init sprite
    // self._src = typeof o.src !== "string" ? o.src : [o.src];
    // self._format = typeof o.format !== "string" ? o.format : [o.format];
    self._src = o;
    self.load(); // => update duration, sprite(var timeout)
};

class SoundnovaPlayerController {
    soundId = null;
    howler = null;

    _progressInterval;
    _player;
    _playButton;
    _progressBar;

    // constructor() {}

    // _setSound(sound) {
    //     this.howler = new Howl({
    //         src: [sound],
    //     });
    // }

    _setAudio(sound) {
        if (this.howler == null) {
            this.howler = new Howl({
                // src: sound.src,
                // format: sound.format,
                src: [sound],
                preload: true,
                autoplay: false,
                loop: false,
                volume: 1,
            });
            this._enableListeners();
        } else {
            this.howler.changeSong(sound);
        }
    }

    // Play new sound and stop previous
    playAudio(sound, player) {
        if (this.soundId && player.dataset?.id == this.soundId) {
            if (this.howler.playing(this.soundId)) this.pause();
            else this.howler.play();
        } else {
            this.stop();
            this._setAudio(sound);
            this.soundId = this.play();
        }
        setTimeout(() => {
            this._player = player;
            this._player.dataset.id = this.soundId;
            this._getPlayerElements();
        });
        return this.soundId;
    }

    play() {
        return this.howler?.play();
    }

    stop() {
        this.howler?.stop();
    }

    pause() {
        this.howler?.pause();
    }

    _enableListeners() {
        this.howler.on("end", () => {
            console.log("on end");
            this._disableButton();
            this._progressBar.style.width = "0%";
        });

        this.howler.on("stop", () => {
            console.log("on stop");
            this._disableButton();
            this._progressBar.style.width = "0%";
        });

        this.howler.on("pause", () => {
            console.log("on pause");
            this._disableButton();
        });

        this.howler.on("play", () => {
            console.log("on play");
            this._enableButton();
            window.requestAnimationFrame(() => this._updateProgress());
        });
    }

    _getPlayerElements() {
        // player = document.querySelector(".player_" + this.soundId);
        this._playButton = this._player.querySelector(".btn-play button");
        this._progressBar = this._player.querySelector(".equalizer .progressbar");
    }

    _updateProgress() {
        if (this.howler && this.howler.playing()) {
            let percentage = (this.howler.seek() / this.howler.duration()) * 100;
            this._progressBar.style.width = percentage + "%";

            window.requestAnimationFrame(() => this._updateProgress());
        }
    }

    _enableButton() {
        this._playButton.classList.add("played");
        this._playButton.classList.remove("paused");
    }

    _disableButton() {
        this._playButton.classList.add("paused");
        this._playButton.classList.remove("played");
    }
}

var SoundnovaPlayer = new SoundnovaPlayerController();
