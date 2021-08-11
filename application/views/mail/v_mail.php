<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <!--[if gte mso 15]> <xml> <o:OfficeDocumentSettings> <o:AllowPNG/> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml> <![endif]-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$subject?></title>
  <style type="text/css">
    p {
      margin: 10px 0;
      padding: 0
    }

    table {
      border-collapse: collapse
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      display: block;
      margin: 0;
      padding: 0;
      color:#333;
    }

    img,
    a img {
      border: 0;
      height: auto;
      outline: none;
      text-decoration: none
    }

    body,
    #bodyTable,
    #bodyCell {
      height: 100%;
      margin: 0;
      padding: 0;
      width: 100%
    }

    #outlook a {
      padding: 0
    }

    img {
      -ms-interpolation-mode: bicubic
    }

    table {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt
    }

    .ReadMsgBody {
      width: 100%
    }

    .ExternalClass {
      width: 100%
    }

    p,
    a,
    li,
    td,
    blockquote {
      mso-line-height-rule: exactly
    }

    a[href^=tel],
    a[href^=sms] {
      color: inherit;
      cursor: default;
      text-decoration: none
    }

    p,
    a,
    li,
    td,
    body,
    table,
    blockquote {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass td,
    .ExternalClass div,
    .ExternalClass span,
    .ExternalClass font {
      line-height: 100%
    }

    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important
    }

    #bodyCell {
      padding: 10px
    }

    .templateContainer {
      max-width: 600px !important
    }

    a.mcnButton {
      display: block
    }

    .mcnImage {
      vertical-align: bottom
    }

    .mcnTextContent {
      word-break: break-word
    }

    .mcnTextContent img {
      height: auto !important
    }

    body,
    #bodyTable {
      background-color: #f5f5f5;
    }

    #bodyCell {
      border-top: 0
    }

    .templateContainer {
      border: 0
    }

    h1 {
      color: black;
      font-family: sans-serif;
      font-size: 26px;
      font-style: normal;
      font-weight: bold;
      line-height: 125%;
      letter-spacing: normal;
      text-align: left
    }

    h2 {
      color: black;
      font-family: sans-serif;
      font-size: 22px;
      font-style: normal;
      font-weight: bold;
      line-height: 125%;
      letter-spacing: normal;
      text-align: left
    }

    h3 {
      color: black;
      font-family: sans-serif;
      font-size: 20px;
      font-style: normal;
      font-weight: bold;
      line-height: 125%;
      letter-spacing: normal;
      text-align: left
    }

    h4 {
      color: black;
      font-family: sans-serif;
      font-size: 18px;
      font-style: normal;
      font-weight: bold;
      line-height: 125%;
      letter-spacing: normal;
      text-align: left
    }

    #templatePreheader {
      background-color: #eee;
      border-top: 0;
      border-bottom: 0;
      padding-top: 9px;
      padding-bottom: 9px
    }

    #templatePreheader .mcnTextContent,
    #templatePreheader .mcnTextContent p {
      color: #333;
      font-family: sans-serif;
      font-size: 12px;
      line-height: 150%;
      text-align: left
    }

    #templatePreheader .mcnTextContent a,
    #templatePreheader .mcnTextContent p a {
      color: #333;
      font-weight: normal;
      text-decoration: underline
    }

    #templateHeader {
      background-color: #333;
      border-top: 0;
      border-bottom: 0;
      padding-top: 9px;
      padding-bottom: 0
    }

    #templateHeader .mcnTextContent,
    #templateHeader .mcnTextContent p {
      color: #333;
      font-family: sans-serif;
      font-size: 16px;
      line-height: 150%;
      text-align: left
    }

    #templateHeader .mcnTextContent a,
    #templateHeader .mcnTextContent p a {
      color: #15c;
      font-weight: normal;
      text-decoration: underline
    }

    #templateBody {
      background-color: #fefefe;
      border-top: 0;
      border-bottom: 2px solid #EAEAEA;
      padding-top: 0;
      padding-bottom: 9px
    }

    #templateBody .mcnTextContent,
    #templateBody .mcnTextContent p {
      color: #333;
      font-family: sans-serif;
      font-size: 16px;
      line-height: 150%;
      text-align: left
    }

    #templateBody .mcnTextContent a,
    #templateBody .mcnTextContent p a {
      color: #15c;
      font-weight: normal;
      text-decoration: underline
    }

    #templateFooter {
      background-color: #eee;
      border-top: 0;
      border-bottom: 0;
      padding-top: 9px;
      padding-bottom: 9px
    }

    #templateFooter .mcnTextContent,
    #templateFooter .mcnTextContent p {
      color: #333;
      font-family: sans-serif;
      font-size: 12px;
      line-height: 150%;
      text-align: center
    }

    #templateFooter .mcnTextContent a,
    #templateFooter .mcnTextContent p a {
      color: #333;
      font-weight: normal;
      text-decoration: underline
    }

    @media only screen and (min-width:768px) {
      .templateContainer {
        width: 600px !important
      }
    }

    @media only screen and (max-width: 480px) {
      body,
      table,
      td,
      p,
      a,
      li,
      blockquote {
        -webkit-text-size-adjust: none !important
      }
    }

    @media only screen and (max-width: 480px) {
      body {
        width: 100% !important;
        min-width: 100% !important
      }
    }

    @media only screen and (max-width: 480px) {
      #bodyCell {
        padding-top: 10px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImage {
        width: 100% !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnCaptionTopContent,
      .mcnCaptionBottomContent,
      .mcnTextContentContainer,
      .mcnBoxedTextContentContainer,
      .mcnImageGroupContentContainer,
      .mcnCaptionLeftTextContentContainer,
      .mcnCaptionRightTextContentContainer,
      .mcnCaptionLeftImageContentContainer,
      .mcnCaptionRightImageContentContainer,
      .mcnImageCardLeftTextContentContainer,
      .mcnImageCardRightTextContentContainer {
        max-width: 100% !important;
        width: 100% !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnBoxedTextContentContainer {
        min-width: 100% !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImageGroupContent {
        padding: 9px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnCaptionLeftContentOuter .mcnTextContent,
      .mcnCaptionRightContentOuter .mcnTextContent {
        padding-top: 9px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImageCardTopImageContent,
      .mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent {
        padding-top: 18px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImageCardBottomImageContent {
        padding-bottom: 9px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImageGroupBlockInner {
        padding-top: 0 !important;
        padding-bottom: 0 !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImageGroupBlockOuter {
        padding-top: 9px !important;
        padding-bottom: 9px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnTextContent,
      .mcnBoxedTextContentColumn {
        padding-right: 18px !important;
        padding-left: 18px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnImageCardLeftImageContent,
      .mcnImageCardRightImageContent {
        padding-right: 18px !important;
        padding-bottom: 0 !important;
        padding-left: 18px !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcpreview-image-uploader {
        display: none !important;
        width: 100% !important
      }
    }

    @media only screen and (max-width: 480px) {
      h1 {
        font-size: 22px !important;
        line-height: 125% !important
      }
    }

    @media only screen and (max-width: 480px) {
      h2 {
        font-size: 20px !important;
        line-height: 125% !important
      }
    }

    @media only screen and (max-width: 480px) {
      h3 {
        font-size: 18px !important;
        line-height: 125% !important
      }
    }

    @media only screen and (max-width: 480px) {
      h4 {
        font-size: 16px !important;
        line-height: 150% !important
      }
    }

    @media only screen and (max-width: 480px) {
      .mcnBoxedTextContentContainer .mcnTextContent,
      .mcnBoxedTextContentContainer .mcnTextContent p {
        font-size: 14px !important;
        line-height: 150% !important
      }
    }

    @media only screen and (max-width: 480px) {
      #templatePreheader {
        display: block !important
      }
    }

    @media only screen and (max-width: 480px) {
      #templatePreheader .mcnTextContent,
      #templatePreheader .mcnTextContent p {
        font-size: 14px !important;
        line-height: 150% !important
      }
    }

    @media only screen and (max-width: 480px) {
      #templateHeader .mcnTextContent,
      #templateHeader .mcnTextContent p {
        font-size: 16px !important;
        line-height: 150% !important
      }
    }

    @media only screen and (max-width: 480px) {
      #templateBody .mcnTextContent,
      #templateBody .mcnTextContent p {
        font-size: 16px !important;
        line-height: 150% !important
      }
    }

    @media only screen and (max-width: 480px) {
      #templateFooter .mcnTextContent,
      #templateFooter .mcnTextContent p {
        font-size: 14px !important;
        line-height: 150% !important
      }
    }
  </style>
</head>

<body>
  <center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
      <tr>
        <td align="center" valign="top" id="bodyCell">
          <!--[if gte mso 9]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"> <![endif]-->
          <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
            <tr>
              <td valign="top" id="templatePreheader">
                <table class="mcnTextBlock" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody class="mcnTextBlockOuter">
                    <tr>
                      <td class="mcnTextBlockInner" valign="top" style="padding-top:10px; padding-bottom: 10px;">
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td valign="top" id="templateHeader">
                <table class="mcnImageBlock" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody class="mcnImageBlockOuter">
                    <tr>
                      <td style="padding:9px" class="mcnImageBlockInner" valign="top">
                        <table class="mcnImageContentContainer" style="min-width:100%;" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td class="mcnImageContent" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0;" valign="top"> <img alt="" src="https://soundnova.net/assets/img/icons/soundnova_logo.svg" style="max-width:204px; width:204px; height:35px; padding-bottom: 30px; display: inline !important; vertical-align: bottom;" class="mcnImage" align="left" width="79"></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td valign="top" id="templateBody">
                <table class="mcnTextBlock" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody class="mcnTextBlockOuter">
                    <tr>
                      <td class="mcnTextBlockInner" valign="top">
                        <table style="min-width:100%;" class="mcnTextContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;" valign="top">

                                <?=$content?>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td valign="top" id="templateFooter">
                <table class="mcnFollowBlock" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody class="mcnFollowBlockOuter">
                    <tr>
                      <td style="padding:9px" class="mcnFollowBlockInner" align="center" valign="top">
                        
                      </td>
                    </tr>
                  </tbody>
                </table>

                <table class="mcnTextBlock" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody class="mcnTextBlockOuter">
                    <tr>
                      <td class="mcnTextBlockInner" valign="top">
                        <table style="min-width:100%;" class="mcnTextContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;" valign="top"><em>Copyright © <?=date('Y')?>, soundnova.net</em>
                                <br>
                                <br> You have received email as you been registered on soundnova.net
                                <br>
                                <br>
                                <br> &nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </table>
          <!--[if gte mso 9]></td></tr></table> <![endif]-->
        </td>
      </tr>
    </table>
  </center>
</body>

</html>
