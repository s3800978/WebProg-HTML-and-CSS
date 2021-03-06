<!DOCTYPE html>

<html lang="en">
  <?php
  session_start();

  if (file_exists("install.php")) {
    exit(
      "Create an admin account and remove the install.php file before using this website"
    );
  }
  ?>
  <head>
    <meta charset="utf-8" />
    <title>Mall FAQs</title>
    <meta name="description" content="Mall FAQ" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header id="nav_header"></header>

    <div class="body_spacing">
      <div class="HeaderH1_Left_With_Spacing">
        <h1>Frequently asked questions</h1>
      </div>

      <div class="H4_and_body_17">
        <h4>Can I cancel my order before it is shipped out?</h4>

        <p>
          Buyers can only request for cancellation once for every order. As
          such, once your request is rejected or withdrawn, you would not be
          able to submit another cancellation request for the same order.
          <br />Once you have requested for order cancellation, the seller is to
          respond to your cancellation request within 2 days (48 hours); If the
          seller fails to respond to the cancellation within that time frame,
          the order will be automatically cancelled by the system and you will
          be refunded accordingly:
        </p>

        <ul>
          <li>Credit/Debit Card - 7 to 14 working days</li>
          <li>Marché! MallPay - 24 hours</li>
          <li>PayNow - 24 hours</li>
        </ul>

        <p>You can cancel your order by:</p>

        <ul>
          <li>Tapping on Cancel Order in the Order Details page.</li>
          <li>Choose a cancellation reason.</li>
          <li>Confirm to proceed with the cancellation.</li>
        </ul>
      </div>

      <div class="H4_and_body_17">
        <h4>What kind of products are not returnable due to Change of Mind?</h4>
        <p>
          In general, products ordered are not returnable due to Change of Mind
          if:
        </p>

        <ol>
          <li>Labels and tags have been removed</li>
          <li>Products that have a broken seal or unauthorized alterations</li>
          <li>(i.e. seal on box has been tampered with)</li>

          <li>Set is incomplete</li>

          <li>Serial numbers are missing</li>

          <li>Product requires installation / has been installed</li>

          <li>
            Any product is classified as hazardous materials or use flammable
            liquids/gases
          </li>

          <li>Any other item that Marché! Mall deems non-refundable</li>
        </ol>

        <p>
          Specialty products such as the following are also not returnable due
          to Change of Mind:
        </p>
        <ul>
          <li>Mystery boxes, Brand boxes, Surprise boxes</li>
          <li>Custom or made to order products</li>
          <li>Virtual goods</li>
          <li>Precious Metals (i.e. Gold, Silver, etc.)</li>
          <li>Precious Gems (Diamonds, Emeralds, etc.)</li>
          <li>Fresh flowers and live plants</li>
          <li>Bulky items (i.e. Furniture)</li>
        </ul>
      </div>

      <div class="H4_and_body_17">
        <h4>When and how will I receive my refund?</h4>
        <p>
          <strong>For local sellers</strong> Once you have returned the item to
          the seller, the seller will check and acknowledge the return of the
          goods. Your refund will be processed if there is no further
          discussion.
        </p>
        <p>
          <strong>For overseas sellers</strong> Once our dispute team concluded
          the inspection of the return/refund requested or the seller accepted
          the proposed return/refund amount, you will be notified of the outcome
          via in-app push notification and email.
        </p>
        <p>
          <strong>For Mall sellers </strong>Once you have returned the item to
          Marché! Mall Warehouse, the parcel will go through Quality Check (QC)
          by our team. Your return/refund request will be processed within 7-9
          working days and you will be notified of the outcome via in-app push
          notification and email.
        </p>
        <p>The refund process is different for each payment method used:</p>
        <ul>
          <li>
            <strong>Credit / debit card</strong> - Refunds will be credited back
            into your debit/credit card within 7-14 working days.
          </li>
          <li>
            <strong>Non-debit / credit card</strong>
            - Payments will be refunded to your Marché! MallPay within 24 hours.
            If you have yet to set up Marché! MallPay, you will be prompted to
            set it up within 72 hours. If your Marché! MallPay is not activated
            after 72 hours, payment will be returned directly to your bank
            account.
          </li>
        </ul>
      </div>
    </div>
    <footer id="mall_footer"></footer>

    <div id="cookie-consent-message"></div>
      <script src="JS/global-load-mall-header-and-footer.js"></script>
  <script src="JS/global-load-store-header-and-footer.js"></script>
  <script src="JS/global-mobile-nav.js"></script>
  <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
  </body>
</html>
