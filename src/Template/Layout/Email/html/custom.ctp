<?php
    // template d'envoie de mails aux employés depuis la page d'accueil
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <title><?= $this->fetch('title') ?></title>
    <style>
      /* -------------------------------------
          GLOBAL
          A very basic CSS reset
      ------------------------------------- */
      * {
          margin: 0;
          padding: 0;
          font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
          box-sizing: border-box;
          font-size: 14px;
      }
      .logo {
          width: 130px;
          float: right;
          padding-right: 10px;
      }
      img {
          max-width: 100%;
      }*
      body {
          -webkit-font-smoothing: antialiased;
          -webkit-text-size-adjust: none;
          width: 100% !important;
          height: 100%;
          line-height: 1.6;
      }
      /* Let's make sure all tables have defaults */
      table td {
          vertical-align: top;
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
      body {
          background-color: #f6f6f6;
      }
      .body-wrap {
          background-color: #f6f6f6;
          width: 100%;
      }
      .container {
          display: block !important;
          max-width: 600px !important;
          margin: 0 auto !important;
          /* makes it centered */
          clear: both !important;
      }
      .content {
          max-width: 600px;
          margin: 0 auto;
          display: block;
          padding: 20px;
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
          background: #fff;
          border: 1px solid #e9e9e9;
          border-radius: 3px;
      }

      .content-wrap {
          padding: 20px;
      }
      .content-block {
          padding: 0 0 20px;
      }
      .header {
          width: 100%;
          margin-bottom: 20px;
      }
      .footer {
          width: 100%;
          clear: both;
          color: #999;
          padding: 5px 10px;
          background: none;
          border-top: none;
          position: relative;
      }
      .footer a {
          /* color: #999; */
          text-decoration: none;
      }
      .footer p, .footer a, .footer unsubscribe, .footer td {
          font-size: 12px;
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1, h2, h3 {
          font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
          color: #000;
          margin: 25px 0 0;
          line-height: 1.2;
          font-weight: 400;
      }
      h1 {
          font-size: 32px;
          font-weight: 500;
      }
      h2 {
          font-size: 24px;
      }
      h3 {
          font-size: 18px;
      }
      h4 {
          font-size: 14px;
          font-weight: 600;
      }
      p, ul, ol {
          margin-bottom: 10px;
          font-weight: normal;
      }
      p li, ul li, ol li {
          margin-left: 5px;
          list-style-position: inside;
      }
      address {
          float: left;
          text-align: left;
          font-size: 15px;
          color:#430f1a;
          font-style: italic;
          font-weight: 600;
      }
      .ludwig {
          position: relative;
          border-left: 0.2em solid #4eac24;
          padding: 10px 0 10px 20px;
          font-family: 'Roboto', serif;
          font-size: 1.4em;
          line-height: 1.2em;
          font-weight: 100;
          font-style: italic;
          background: #ddd;
      }
      blockquote {
          margin-bottom: 3em;
      }

      /* -------------------------------------
          LINKS & BUTTONS
      ------------------------------------- */
      a {
          color: #1ab394;
          text-decoration: underline;
      }
      .btn-primary {
          text-decoration: none;
          color: #FFF;
          background-color: #1ab394;
          border: solid #1ab394;
          border-width: 5px 10px;
          line-height: 2;
          font-weight: bold;
          text-align: center;
          cursor: pointer;
          display: inline-block;
          border-radius: 5px;
          text-transform: capitalize;
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
          margin-bottom: 0;
      }
      .first {
          margin-top: 0;
      }
      .aligncenter {
          text-align: center;
      }
      .alignright {
          text-align: right;
      }
      .alignleft {
          text-align: left;
      }
      .clear {
          clear: both;
      }

      /* -------------------------------------
          ALERTS
          Change the class depending on warning email, good email or bad email
      ------------------------------------- */
      .alert {
          font-size: 16px;
          color: #fff;
          font-weight: 500;
          padding: 20px;
          text-align: center;
          border-radius: 3px 3px 0 0;
      }
      .alert a {
          color: #fff;
          text-decoration: none;
          font-weight: 500;
          font-size: 16px;
      }
      .alert.alert-warning {
          background: #f8ac59;
      }
      .alert.alert-bad {
          background: #ed5565;
      }
      .alert.alert-good {
          background: #1ab394;
      }

      /* -------------------------------------
          INVOICE
          Styles for the billing table
      ------------------------------------- */
      .invoice {
          margin: 40px auto;
          text-align: left;
          width: 80%;
      }
      .invoice td {
          padding: 5px 0;
      }
      .invoice .invoice-items {
          width: 100%;
      }
      .invoice .invoice-items td {
          border-top: #eee 1px solid;
      }
      .invoice .invoice-items .total td {
          border-top: 2px solid #333;
          border-bottom: 2px solid #333;
          font-weight: 700;
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 640px) {
          h1, h2, h3, h4 {
              font-weight: 600 !important;
              margin: 20px 0 5px !important;
          }

          h1 {
              font-size: 22px !important;
          }

          h2 {
              font-size: 18px !important;
          }

          h3 {
              font-size: 16px !important;
          }

          .container {
              width: 100% !important;
          }

          .content, .content-wrap {
              padding: 10px !important;
          }

          .invoice {
              width: 100% !important;
          }
      }
    </style>
  </head>
  <body>
    <table class="body-wrap">
      <tbody>
        <tr>
          <td></td>
          <td class="container" width="600">
            <div class="content">
              <table class="main dark" width="100%" cellspacing="0" cellpadding="0">
                <tbody class="content-wrap" style="text-align: center;background: #f6f6f6;">
                  <tr>
                    <td>
                      <?php echo $this->Html->image("/webroot/img/l1.png", ['fullBase' => true, 'alt' => 'Hôtels.Ci', 'class' => 'logo']); ?>
                    </td>
                    <td>
                      <adress style="float: left;text-align: left;">
                        JOSHUA<br/>
                        22 59 09 81<br/>
                        57 72 76 88<br/>
                        Côte D'Ivoire<br/>
                        Rue I-132<br/>
                        25 BP 1353 Abidjan<br/>
                      </adress>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="main" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td class="content-wrap">
                      <table cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td class="content-block">
                              <?= $this->fetch('content') ?>
                            </td>
                          </tr>
                          <tr>
                            <!-- <td class="content-block aligncenter">
                              <a href="#" class="btn-primary">Confirm email address</a>
                            </td> -->
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="footer">
                <table width="100%">
                  <tbody>
                    <tr>
                      <td class="aligncenter content-block">
                        <p style="margin: 0;">Vous recevez ce mail car vous avez rejoint la grande famille <a href="http://joshuaconsultng.com/">JOSHUA</a></p>
                        <p><a href="#">Cliquez ici</a> pour vous désinscrire.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </body>
