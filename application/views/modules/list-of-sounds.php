<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  $arrow = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#24e8fb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

  $list = [
    [
      'id' => 0, // category id
      'name' => 'Sound Design', // category name
      'items' => [
        [
          'id' => 0, // sound id
          'preview' => 'http://soundnova.loc/assets/media/music/rick-astley-never-gonna-give-you-up.mp3', // link to preview audio file
          'artist' => 'Sound Nova',
          'title' => 'Some Sound Effect',
          'time' => 243 // sound length in seconds
        ],
        [
          'id' => 1, // sound id
          'preview' => '/assets/media/music/background music.mp3', // link to preview audio file
          'artist' => 'Sound Nova 2',
          'title' => 'Some Sound Effect 2',
          'time' => 243 // sound length in seconds
        ]
      ]
    ],
    [
      'id' => 1, // category id
      'name' => 'Movies', // category name
      'items' => [
        [
          'id' => 0, // sound id
          'preview' => 'http://soundnova.loc/assets/media/music/rick-astley-never-gonna-give-you-up.mp3', // link to preview audio file
          'artist' => 'Sound Nova',
          'title' => 'Some Sound Effect',
          'time' => 253 // sound length in seconds
        ]
      ]
    ],
    [
      'id' => 2, // category id
      'name' => 'Cartoons', // category name
      'items' => [
        [
          'id' => 0, // sound id
          'preview' => '/assets/media/music/background music.mp3', // link to preview audio file
          'artist' => 'Sound Nova',
          'title' => 'Some Sound Effect',
          'time' => 273 // sound length in seconds
        ]
      ]
    ]
  ];
?>

<h2 class="txt-uppercase txt-center dv-txt-left mb-2"><span class="gradient-title"><?= $title ?></span></h2>
<div class="secondary-subtitle txt-center dv-txt-left mb-2"><?= $text ?></div>

<div class="list-of-sounds">
  <!-- SELECTED HEADER FOR MOBILE -->
  <div class="view-mobile">
    <div class="categories">
      <div class="select-custom">
        <select name="sounds-category" id="sounds-category">
          <?php foreach ($list as $key => $category) { ?>
            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
          <?php } ?>
        </select>
        <div class="arrow">
          <?= $arrow ?>
        </div>
      </div>
    </div>
  </div>
  <!-- SCROLLED HEADER FOR DESKTOP -->
  <div class="view-desktop">
    <div class="categories">
      <div class="btn back"><?= $arrow ?></div>
      <ul class="body">
        <li class="show-category active" data-id="all">All</li>
        <?php foreach ($list as $key => $category) { ?>
          <li class="show-category" data-id="<?= $category['id'] ?>"><?= $category['name'] ?></li>
        <?php } ?>
      </ul>
      <div class="btn next"><?= $arrow ?></div>
    </div>
  </div>
  <!-- SCROLLED LIST -->
  <div class="list mt-1">
    <?php foreach ($list as $key => $category) { ?>
      <div id="category_<?= $category['id'] ?>" class="category">
        <?php foreach ($category['items'] as $key2 => $sound) { ?>
          <div class="mb-1">
            <? $this->load->view('modules/player', [
              'key' => $category['id'] . "_" . $sound['id'],
              'buy_button' => true,
              'artist_name' => true,
              'track_title' => true,
              'sound' => $sound
            ]); ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>

<script>
  var scrollBody = document.querySelector('.categories .body');
  var maxScrollLeft = scrollBody.scrollWidth - scrollBody.clientWidth;
  const scrollDistance = 150;
  const speed = 1;
  var lastScrollPosition = 0;

  function CheckButtons() {
    if (scrollBody.scrollLeft == 0) {
      document.querySelector('.btn.back').classList.add("disabled");
    } else {
      document.querySelector('.btn.back').classList.remove("disabled");
    }
    if (maxScrollLeft == 0 || scrollBody.scrollLeft > 0 && scrollBody.scrollLeft == lastScrollPosition) {
      document.querySelector('.btn.next').classList.add("disabled");
    } else {
      document.querySelector('.btn.next').classList.remove("disabled");
    }
  }

  CheckButtons();

  document.querySelector('.btn.next').addEventListener('click', event => {
    i = 0;
    var slideTimer = setInterval(function(){
      scrollBody.scrollLeft += 1;
      CheckButtons();
      if (scrollBody.scrollLeft == lastScrollPosition) i = scrollDistance;
      i++;
      if (i >= scrollDistance) window.clearInterval(slideTimer);
      lastScrollPosition = scrollBody.scrollLeft;
    }, speed);
  })
  document.querySelector('.btn.back').addEventListener('click', event => {
    i = 0;
    if (scrollBody.scrollLeft > 0) {
      var slideTimer = setInterval(function(){
        scrollBody.scrollLeft -= 1;
        CheckButtons();
        if (scrollBody.scrollLeft == 0) i = scrollDistance;
        i++;
        if (i >= scrollDistance) window.clearInterval(slideTimer);
      }, speed);
    }
  })


  btnCategorues = document.querySelectorAll('.show-category');

  btnCategorues.forEach(function(item) {
    item.addEventListener('click', event => {

      btnCategorues.forEach(function(item2) {
        item2.classList.remove('active');
      });
      item.classList.add('active');

      document.querySelectorAll('.category').forEach(function(category) {
        if (category.id != 'category_' + item.dataset.id) {
          category.classList.add('hidden');
        } else {
          category.classList.remove('hidden');
        }

        if (item.dataset.id == 'all')
          category.classList.remove('hidden');
      });
    })
  });
</script>