<?php
session_start();
require_once('CreateDb.php');

// Create an instance of the Createdb class
$database = new CreateDb("Productdb", "Producttb");

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'product_id' is set in the POST data
    if (isset($_POST['product_id'])) {
        // Initialize the cart if it's not already set
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Get the product ID from the form submission
        $productId = $_POST['product_id'];

        // Check if the product is not already in the cart
        if (!in_array($productId, $_SESSION['cart'])) {
            // Add the product ID to the cart
            $_SESSION['cart'][] = $productId;

            // Get additional product details from the database based on the product ID
            $productDetails = $database->getProductDetailsById($productId);

            // Add the product details to the cart
            $_SESSION['cart'][] = array(
                'id' => $productDetails['id'],
                'product_name' => $productDetails['product_name'],
                'product_image' => $productDetails['product_image']
            );
        }

        // Redirect to cart.php after adding the item
        header("Location: cart.php");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Product ID is not set in the POST data.";
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <link rel="stylesheet" href="searchstyle.css">
    <script src=“https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js”></script>
<link rel=“stylesheet” href=“https://unpkg.com/flickity@2/dist/flickity.min.css”>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://58194a.myshopify.com/products/gucci"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title>
      GG MARMONT QUILTED MINI BAG WITH CHAIN
 &ndash; My Store</title>

    
      <meta name="description" content="The Present Of The House Meets The Past With The Double G Detail. Items That Can Be Worn Season After Season Reinforce The Idea Of A Wardrobe That We Cherish. This Mini Chain Bag Is Crafted From Signature Black Herringbone Quilted Leather, While The Interior Features Two Card Slots. Black Herringbone Quilted Leather Ag">
    

    

<meta property="og:site_name" content="My Store">
<meta property="og:url" content="https://58194a.myshopify.com/products/gucci">
<meta property="og:title" content="GG MARMONT QUILTED MINI BAG WITH CHAIN">
<meta property="og:type" content="product">
<meta property="og:description" content="The Present Of The House Meets The Past With The Double G Detail. Items That Can Be Worn Season After Season Reinforce The Idea Of A Wardrobe That We Cherish. This Mini Chain Bag Is Crafted From Signature Black Herringbone Quilted Leather, While The Interior Features Two Card Slots. Black Herringbone Quilted Leather Ag"><meta property="og:image" content="http://58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086">
  <meta property="og:image:secure_url" content="https://58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086">
  <meta property="og:image:width" content="1000">
  <meta property="og:image:height" content="1335"><meta property="og:price:amount" content="490.00">
  <meta property="og:price:currency" content="USD"><meta name="twitter:site" content="@selly_bags"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="GG MARMONT QUILTED MINI BAG WITH CHAIN">
<meta name="twitter:description" content="The Present Of The House Meets The Past With The Double G Detail. Items That Can Be Worn Season After Season Reinforce The Idea Of A Wardrobe That We Cherish. This Mini Chain Bag Is Crafted From Signature Black Herringbone Quilted Leather, While The Interior Features Two Card Slots. Black Herringbone Quilted Leather Ag">


    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/constants.js?v=58251544750838685771688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/pubsub.js?v=158357773527763999511688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/global.js?v=139248116715221171191688782258" defer="defer"></script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/animations.js?v=114255849464433187621688782258" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/79103263031/digital_wallets/dialog">
<link rel="alternate" type="application/json+oembed" href="https://58194a.myshopify.com/products/gucci.oembed">
<script>
  (function() {
    var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.8645d252f07ec25fdbc6.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~Information~NoAddressLocation~Payment~PostPurchase~Review~Shipping~ShopPay~Sho~cf13f96e.latest.en.04837ae4ff5a8e949953.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.84ff9c0024faf7f72c14.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.900911b3d82c82309ebf.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.86cd9328cdcd6cd3a58f.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.b4546f9bffad10b3673b.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~app.latest.en.f5154093d2604596d084.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.931851b1b02f1bcae42a.js"];
    var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.9f2a5e9ec696775e2217.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.e788719f193b49c039a3.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.6b4c79ead7042980b29d.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.da9f06164a980bf8e7ea.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.9a0274ab07be120c1902.css"];

    function prefetch(url, as, callback) {
      var link = document.createElement('link');
      if (link.relList.supports('prefetch')) {
        link.rel = 'prefetch';
        link.fetchPriority = 'low';
        link.as = as;
        link.href = url;
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      } else {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onloadend = callback;
        xhr.send();
      }
    }

    function prefetchAssets() {
      var resources = [].concat(
        scripts.map(function(url) { return [url, 'script']; }),
        styles.map(function(url) { return [url, 'style']; })
      );
      var index = 0;
      (function next() {
        var res = resources[index++];
        if (res) prefetch(res[0], res[1], next);
      })();
    }

    addEventListener('load', prefetchAssets);
   })();
</script>
<script id="shopify-features" type="application/json">{"accessToken":"c23937b3654092feb6c0c63ff7d42d96","betas":["rich-media-storefront-analytics"],"domain":"58194a.myshopify.com","predictiveSearch":true,"shopId":79103263031,"smart_payment_buttons_url":"https:\/\/58194a.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/58194a.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":false,"betterDynamicCheckoutRecommendation":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "58194a.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.country = "MA";
Shopify.theme = {"name":"THE ONE","id":154447937847,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":79103263031,"offset":3600,"reqid":"80a81eba-d827-40df-b5b7-d29558d5c1d9","pageurl":"58194a.myshopify.com\/products\/gucci","u":"38145f7d17c3","p":"product","rtyp":"product","rid":8476805529911};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>

<script integrity="sha256-PxOtY43aY0IIRkJyboCWUgXVuC12GAXQ8LKFAxO8H98=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-3f13ad638dda6342084642726e80965205d5b82d761805d0f0b2850313bc1fdf.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script integrity="sha256-AjT+yRYgO8z0L66BMKoqBvO4SrOWLJYnYYWthdsOhP4=" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/bars/admin_bar_injector-0234fec916203bccf42fae8130aa2a06f3b84ab3962c96276185ad85db0e84fe.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//58194a.myshopify.com/cdn/shop/t/3/compiled_assets/scripts.js?134"></script>
<style id="shopify-dynamic-checkout">.shopify-payment-button__button--hidden {
  visibility: hidden;
}

.shopify-payment-button__button {
  border-radius: 4px;
  border: none;
  box-shadow: 0 0 0 0 transparent;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 1em;
  font-weight: 500;
  line-height: 1;
  text-align: center;
  width: 100%;
  transition: background 0.2s ease-in-out;
}

.shopify-payment-button__button[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--unbranded {
  background-color: #1990c6;
  padding: 1em 2em;
}

.shopify-payment-button__button--unbranded:hover:not([disabled]) {
  background-color: #136f99;
}

.shopify-payment-button__more-options {
  background: transparent;
  border: 0 none;
  cursor: pointer;
  display: block;
  font-size: 1em;
  margin-top: 1em;
  text-align: center;
  width: 100%;
}

.shopify-payment-button__more-options:hover:not([disabled]) {
  text-decoration: underline;
}

.shopify-payment-button__more-options[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--branded {
  display: flex;
  flex-direction: column;
  min-height: 44px;
  position: relative;
  z-index: 1;
}

.shopify-payment-button__button--branded .shopify-cleanslate {
  flex: 1 !important;
  display: flex !important;
  flex-direction: column !important;
}
</style>
<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: Assistant;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b") format("woff2"),
       url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.a2d012304becc2a26f1ded1acc136fcab85c9afd.woff?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=02030f9d1dde51342c51c8124d93801e9be2005637e56836fc16e30c01d7a5ed") format("woff");
}

      @font-face {
  font-family: Assistant;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n7.3335c7bdaddf2501ddab87cdbd9be98f3870e10d.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=1e93eb96a0f174c35d517a1ff23b2e68e758f6bfe3c197e1ad3399b452a01544") format("woff2"),
       url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n7.7c85f5c5cc1555de92cc7ef2790ee3cffe5237f5.woff?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=89584140723d40bf2a1f9299567230d4801e392c42e6e59ce7d3de742120b45b") format("woff");
}

      
      
      @font-face {
  font-family: Assistant;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b") format("woff2"),
       url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.a2d012304becc2a26f1ded1acc136fcab85c9afd.woff?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=02030f9d1dde51342c51c8124d93801e9be2005637e56836fc16e30c01d7a5ed") format("woff");
}


      
        :root,
        .color-background-1 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 255,255,255;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-background-2 {
          --color-background: 243,243,243;
        
          --gradient-background: #f3f3f3;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 243,243,243;
        --color-secondary-button: 243,243,243;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 243,243,243;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(243 243 243);
      }
      
        
        .color-inverse {
          --color-background: 36,40,51;
        
          --gradient-background: #242833;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 0,0,0;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }
      
        
        .color-accent-1 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }
      
        
        .color-accent-2 {
          --color-background: 51,79,180;
        
          --gradient-background: #334fb4;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 51,79,180;
        --color-secondary-button: 51,79,180;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 51,79,180;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(51 79 180);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: Assistant, sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: Assistant, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 400;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.0;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 110rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: -2px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 20px;
        --buttons-radius-outset: 21px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 0.9;
        --buttons-shadow-opacity: 0.15;
        --buttons-shadow-visible: 1;
        --buttons-shadow-horizontal-offset: -2px;
        --buttons-shadow-vertical-offset: -2px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 0px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 0px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/base.css?v=107774344904665716901691097728" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b" type="font/woff2" crossorigin><link rel="preload" as="font" href="//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b" type="font/woff2" crossorigin><link
        rel="stylesheet"
        href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-predictive-search.css?v=118923337488134913561688782258"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 79103263031,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "product"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,o,t,r,i){function s(e,n){if(document.head){var a=document.createElement("link");e.match(/spin\.dev\/?/)&&(e+="?fast_storefront_renderer=1"),a.rel="preload",a.href=e,n&&(a.as=n);try{document.head.appendChild(a)}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Could not append prefetch link tag to DOM.")}}}var l=i||[],d=null!==e;d&&(window.Shopify=window.Shopify||{},window.Shopify.analytics=window.Shopify.analytics||{},window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=function(e,n,a){window.Shopify.analytics.replayQueue.push([e,n,a])});var c=function(){var e="legacy",n="unknown",a=null,o=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),t=navigator.userAgent.match(/(Edg)\/(\d+)/i),r=navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);r?(n="safari",a=parseInt(r[2],10)):t?(n="edge",a=parseInt(t[2],10)):o&&(n=o[1].toLocaleLowerCase(),a=parseInt(o[2],10));var i={chrome:60,firefox:55,safari:11,edge:80}[n];return void 0!==i&&null!==a&&i<=a&&(e="modern"),e}(),p=c.substring(0,1),f=o.substring(0,1);if(d)try{self.performance.mark("wpm:start")}catch(e){}if(d){var u=self.location.origin,w=(e.webPixelsConfigList||[]).filter((function(e){return"app"===e.type.toLowerCase()}));for(let e=0;e<w.length;e++){s([u,"/wpm@",r,"/web-pixel-",w[e].id,"@",w[e].scriptVersion,"/sandbox/worker.",c,".js"].join(""),"script")}}var h,y,m,g,v,b,_,S,x=[a,"/wpm","/",f,r,p,".js"].join("");h={src:x,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);n(a),window.Shopify.analytics.replayQueue.forEach((function(e){a.publishCustomEvent(e[0],e[1],e[2])})),window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=a.publishCustomEvent,l.indexOf("web_pixels_identify_api")>-1&&(window.Shopify.analytics.identify=a.identify)}},onerror:function(){var n=(e.storefrontBaseUrl?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin)+"/.well-known/shopify/monorail/unstable/produce_batch",a=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:x+" has failed to load"},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,a))return!0}catch(e){}const o=new XMLHttpRequest;try{return o.open("POST",n,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(a),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}},y=document.createElement("script"),m=h.src,g=h.async||!0,v=h.onload,b=h.onerror,_=document.head,S=document.body,y.async=g,y.src=m,v&&y.addEventListener("load",v),b&&y.addEventListener("error",b),_?_.appendChild(y):S?S.appendChild(y):console.error("Did not find a head or body element to append the script")})({shopId: 79103263031,storefrontBaseUrl: "https://58194a.myshopify.com",cdnBaseUrl: "https://58194a.myshopify.com/cdn",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0557","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0557","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[{"id":"45789478682935","image":{"src":"\/\/58194a.myshopify.com\/cdn\/shop\/files\/Gucci.webp?v=1688742086"},"price":{"amount":490.0,"currencyCode":"USD"},"product":{"id":"8476805529911","title":"GG MARMONT QUILTED MINI BAG WITH CHAIN","untranslatedTitle":"GG MARMONT QUILTED MINI BAG WITH CHAIN","vendor":"My Store","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");webPixelsManagerAPI.publish("product_viewed", {"productVariant":{"id":"45789478682935","image":{"src":"\/\/58194a.myshopify.com\/cdn\/shop\/files\/Gucci.webp?v=1688742086"},"price":{"amount":490.0,"currencyCode":"USD"},"product":{"id":"8476805529911","title":"GG MARMONT QUILTED MINI BAG WITH CHAIN","untranslatedTitle":"GG MARMONT QUILTED MINI BAG WITH CHAIN","vendor":"My Store","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}});},"https://58194a.myshopify.com/cdn","browser","0.0.337","6b44608cwcf56d5e7p4ae4b2b5m34ff8b1a",["web_pixels_async_pixel_refactor"]);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"product":{"id":8476805529911,"gid":"gid:\/\/shopify\/Product\/8476805529911","vendor":"My Store","type":"","variants":[{"id":45789478682935,"price":49000,"name":"GG MARMONT QUILTED MINI BAG WITH CHAIN","public_title":null,"sku":""}]},"page":{"pageType":"product","resourceType":"product","resourceId":8476805529911}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 79103263031,
      theme_id: 154447937847,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = 'https://cdn.shopify.com/s/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":79103263031,"isMerchantRequest":true,"themeId":154447937847,"themeCityHash":"16227685011085769580","contentLanguage":"en","currency":"USD"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"product","resourceType":"product","resourceId":8476805529911});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        window.ShopifyAnalytics.lib.track("Viewed Product",{"currency":"USD","variantId":45789478682935,"productId":8476805529911,"productGid":"gid:\/\/shopify\/Product\/8476805529911","name":"GG MARMONT QUILTED MINI BAG WITH CHAIN","price":"490.00","sku":"","brand":"My Store","variant":null,"category":"","nonInteraction":true});
      window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1",{"currency":"USD","variantId":45789478682935,"productId":8476805529911,"productGid":"gid:\/\/shopify\/Product\/8476805529911","name":"GG MARMONT QUILTED MINI BAG WITH CHAIN","price":"490.00","sku":"","brand":"My Store","variant":null,"category":"","nonInteraction":true,"referer":"https:\/\/58194a.myshopify.com\/products\/gucci"});
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Dawn";
  window.BOOMR.themeVersion = "10.0.0";
  window.BOOMR.shopId = 79103263031;
  window.BOOMR.themeId = 154447937847;
  window.BOOMR.renderRegion = "gcp-us-central1";
  window.BOOMR.url =
    "https://58194a.myshopify.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
</head>

  <body class="gradient animate--hover-default">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--19917717242167__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-search.css?v=130382253973794904871688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=160161990486659892291688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-items.css?v=4628327769354762111688782258" media="print" onload="this.media='all'"><link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041688782258" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=43236910203777044501688782258" media="print" onload="this.media='all'"><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-localization-form.css?v=14162097032368378391688782258" rel="stylesheet" type="text/css" media="all" />
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-search.css?v=130382253973794904871688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=160161990486659892291688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-items.css?v=4628327769354762111688782258" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/details-disclosure.js?v=13653116266235556501688782258" defer="defer"></script>
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/details-modal.js?v=25581673532751508451688782258" defer="defer"></script>
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/cart-notification.js?v=133508293167896966491688782258" defer="defer"></script>
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/search-form.js?v=133129549252120666541688782258" defer="defer"></script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/localization-form.js?v=98683197766447567971688782258" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient header-wrapper--border-bottom"><header class="header header--middle-center header--mobile-center page-width drawer-menu header--has-menu header--has-social">

<header-drawer data-breakpoint="desktop">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span>
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

      </span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list"><li><a
                      id="HeaderDrawer-home-page"
                      href="INDEX.HTML"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Home page
                    </a></li><li><a
                      id="HeaderDrawer-all-collections"
                      href="VIEWALLCOLLECTIONS.HTML"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      All collections
                    </a></li><li><a
                      id="HeaderDrawer-all-products"
                      href="SHOPALL.HTML"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      All products
                    </a></li></ul>
          </nav>
          <div class="menu-drawer__utility-links"><div class="menu-drawer__localization header__localization">
</div><ul class="list list-social list-unstyled" role="list"><li class="list-social__item">
                  <a href="https://twitter.com/selly_bags" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-twitter" viewBox="0 0 18 15">
  <path fill="currentColor" d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
</svg>
<span class="visually-hidden">Twitter</span>
                  </a>
                </li><li class="list-social__item">
                  <a href="https://www.pinterest.fr/Sellybags/" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-pinterest" viewBox="0 0 17 18">
  <path fill="currentColor" d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
</svg>
<span class="visually-hidden">Pinterest</span>
                  </a>
                </li><li class="list-social__item">
                  <a href="https://www.instagram.com/selly.bags/" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 18 18">
  <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"/>
  <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z">
</svg>
<span class="visually-hidden">Instagram</span>
                  </a>
                </li></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>

<a href="INDEX.HTML" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                  <img src="//58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=600" alt="My Store" srcset="//58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=210 210w, //58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=315 315w, //58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=420 420w" width="210" height="210.0" loading="eager" class="header__heading-logo" sizes="(min-width: 750px) 210px, 50vw">
              </div></a><div class="header__icons header__icons--localization header__localization">
      <div class="desktop-localization-wrapper">
</div>
      
    <style>
        .search-icon {
            display: flex;
            align-items: center;
        }

        .search-icon i {
            font-size: 1.5rem;
            cursor: pointer;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input[type="text"] {
            padding: 6px 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            width: 200px;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            padding: 5px 0;
            z-index: 999;
        }

        .search-results ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .search-results li {
            padding: 8px 10px;
            cursor: pointer;
        }

        .search-results li:hover {
            background-color: #e5e5e5;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <!-- Your existing header content -->

        <!-- Search icon with search bar -->
           <style>
        /* Basic styling for the search icon and search bar */
        .search-icon {
            position: relative;
            display: inline-block;
        }

        .fa-search {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .search-bar {
            position: relative;
            display: inline-block;
        }

        #search-input {
            padding-left: 25px;
        }

        /* Add any other necessary styling for your page layout */
    </style>
</head>
<body>
    <!-- Search icon with search bar -->
 <div id="search-container">
    <input type="text" id="search-input" placeholder="Search">
    <ul id="autocomplete-list"></ul>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("search-input");
        const autocompleteList = document.getElementById("autocomplete-list");

        searchInput.addEventListener("input", function () {
            const searchValue = this.value.toLowerCase();

            // Make an AJAX request to get autocomplete data from the server
            fetch("search.php")
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const filteredProducts = data.filter(product => product.product_name.toLowerCase().includes(searchValue));
                    displayAutocomplete(filteredProducts);
                })
                .catch(error => {
                    console.error("Error fetching autocomplete data:", error);
                    // Handle the error, for example, by displaying a message to the user
                });
        });

        function displayAutocomplete(results) {
            autocompleteList.innerHTML = "";

            if (results.length === 0) {
                autocompleteList.style.display = "none";
                return;
            }

            autocompleteList.style.display = "block";

            results.forEach(result => {
                const listItem = document.createElement("li");

                // Create a link around each item
                const link = document.createElement("a");
                link.href = result.product_link; // Set the link URL
                link.innerHTML = `<img src="${result.product_image}" alt="${result.product_name}"> ${result.product_name}`;
                
                // Add an event listener to handle the redirection when an item is clicked
                link.addEventListener("click", function (event) {
                    event.preventDefault();
                    window.location.href = result.product_link;
                });

                listItem.appendChild(link);
                autocompleteList.appendChild(listItem);
            });
        }

        document.addEventListener("click", function (event) {
            if (event.target !== searchInput) {
                autocompleteList.style.display = "none";
            }
        });
    });
</script>
</body>

</head>


       


  </header>
</sticky-header>
<a href="cart.php" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg>
<span class="visually-hidden">Cart</span></a>
    </div>


<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "My Store",
    
      "logo": "https:\/\/58194a.myshopify.com\/cdn\/shop\/files\/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535\u0026width=500",
    
    "sameAs": [
      "https:\/\/twitter.com\/selly_bags",
      "",
      "https:\/\/www.pinterest.fr\/Sellybags\/",
      "https:\/\/www.instagram.com\/selly.bags\/",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/58194a.myshopify.com\/pages\/collection-doesnt-exist"
  }
</script>
</div>
<!-- END sections: header-group -->

    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--19917721043255__main" class="shopify-section section"><section
  id="MainProduct-template--19917721043255__main"
  class="page-width section-template--19917721043255__main-padding"
  data-section="template--19917721043255__main"
>
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-main-product.css?v=12388427824196486731691102414" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-accordion.css?v=180964204318874863811688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-rating.css?v=157771854592137137841688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=43236910203777044501688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-deferred-media.css?v=14096082462203297471688782258" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19917721043255__main-padding {
      padding-top: 27px;
      padding-bottom: 9px;
    }

    @media screen and (min-width: 750px) {
      .section-template--19917721043255__main-padding {
        padding-top: 36px;
        padding-bottom: 12px;
      }
    }</style><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/product-info.js?v=68469288658591082901688782258" defer="defer"></script>
  <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/product-form.js?v=138816392078825582251688782258" defer="defer"></script>
  


  <div class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">
    <div class="grid__item product__media-wrapper">
      
<media-gallery
  id="MediaGallery-template--19917721043255__main"
  role="region"
  
    class="product__column-sticky"
  
  aria-label="Gallery Viewer"
  data-desktop-layout="stacked"
>
  <div id="GalleryStatus-template--19917721043255__main" class="visually-hidden" role="status"></div>
  <slider-component id="GalleryViewer-template--19917721043255__main" class="slider-mobile-gutter"><a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--19917721043255__main">
        Skip to product information
      </a><ul
      id="Slider-Gallery-template--19917721043255__main"
      class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile"
      role="list"
    ><li
            id="Slide-template--19917721043255__main-34496927662391"
            class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in"
            data-media-id="template--19917721043255__main-34496927662391"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 0.7490636704119851; --preview-ratio: 0.7490636704119851;"
>
  <noscript><div class="product__media media">
        <img src="//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1946 1946w" width="1946" height="2598" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--19917721043255__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
    <div class="loading-overlay__spinner hidden">
      <svg
        aria-hidden="true"
        focusable="false"
        class="spinner"
        viewBox="0 0 66 66"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
    <div class="product__media media media--transparent">
      <img src="//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&amp;width=1946 1946w" width="1946" height="2598" class="image-magnify-lightbox" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="34496927662391">
      <span class="visually-hidden">
        Open media 1 in modal
      </span>
    </button>
  </modal-opener></div>

          </li><li
            id="Slide-template--19917721043255__main-34496927695159"
            class="product__media-item grid__item slider__slide scroll-trigger animate--fade-in"
            data-media-id="template--19917721043255__main-34496927695159"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 0.7485029940119761; --preview-ratio: 0.7485029940119761;"
>
  <noscript><div class="product__media media">
        <img src="//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1946 1946w" width="1946" height="2600" loading="lazy" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--19917721043255__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
    <div class="loading-overlay__spinner hidden">
      <svg
        aria-hidden="true"
        focusable="false"
        class="spinner"
        viewBox="0 0 66 66"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
    <div class="product__media media media--transparent">
      <img src="//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&amp;width=1946 1946w" width="1946" height="2600" loading="lazy" class="image-magnify-lightbox" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="34496927695159">
      <span class="visually-hidden">
        Open media 2 in modal
      </span>
    </button>
  </modal-opener></div>

          </li></ul><div class="slider-buttons no-js-hidden quick-add-hidden">
        <button
          type="button"
          class="slider-button slider-button--prev"
          name="previous"
          aria-label="Slide left"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
        <div class="slider-counter caption">
          <span class="slider-counter--current">1</span>
          <span aria-hidden="true"> / </span>
          <span class="visually-hidden">of</span>
          <span class="slider-counter--total">2</span>
        </div>
        <button
          type="button"
          class="slider-button slider-button--next"
          name="next"
          aria-label="Slide right"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
      </div></slider-component></media-gallery>

    </div>
    <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
      <product-info
        id="ProductInfo-template--19917721043255__main"
        data-section="template--19917721043255__main"
        data-url="/products/gucci"
        class="product__info-container product__column-sticky"
      ><div class="product__title" >
                <h1>GG MARMONT QUILTED MINI BAG WITH CHAIN</h1>
                <a href="/products/gucci" class="product__title">
                  <h2 class="h1">
                    GG MARMONT QUILTED MINI BAG WITH CHAIN
                  </h2>
                </a>
              </div><div class="no-js-hidden" id="price-template--19917721043255__main" role="status" >
<div
  class="
    price price--large price--show-badge"
>
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        $490.00 USD
      </span>
    </div>
    <div class="price__sale">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        $490.00 USD
      </span>
    </div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div><span class="badge price__badge-sale color-accent-2">
      Sale
    </span>

    <span class="badge price__badge-sold-out color-inverse">
      Sold out
    </span></div>
</div><div class="product__tax caption rte"><a href="/policies/shipping-policy">Shipping</a> calculated at checkout.
</div><div ><form method="post" action="/cart/add" id="product-form-installment-template--19917721043255__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="45789478682935">
                  
</form></div>
<noscript class="product-form__noscript-wrapper-template--19917721043255__main">
  <div class="product-form__input hidden">
    <label class="form__label" for="Variants-template--19917721043255__main">Product variants</label>
    <div class="select">
      <select
        name="id"
        id="Variants-template--19917721043255__main"
        class="select__select"
        form="product-form-template--19917721043255__main"
      ><option
            
              selected="selected"
            
            
            value="45789478682935"
          >Default Title - $490.00</option></select>
      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

    </div>
  </div>
</noscript>

<div
                id="Quantity-Form-template--19917721043255__main"
                class="product-form__input product-form__quantity"
                
              >
                
                

                <label class="quantity__label form__label" for="Quantity-template--19917721043255__main">
                  Quantity
                  <span class="quantity__rules-cart no-js-hidden hidden">
                    <span class="loading-overlay hidden">
                      <span class="loading-overlay__spinner">
                        <svg
                          aria-hidden="true"
                          focusable="false"
                          class="spinner"
                          viewBox="0 0 66 66"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                        </svg>
                      </span>
                    </span>
                    <span>(<span class="quantity-cart">0</span> in cart)</span>
                  </span>
                </label>
                <quantity-input class="quantity">
                  <button class="quantity__button no-js-hidden" name="minus" type="button">
                    <span class="visually-hidden">Decrease quantity for GG MARMONT QUILTED MINI BAG WITH CHAIN</span>
                    <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-minus"
  fill="none"
  viewBox="0 0 10 2"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 110 1H1A.5.5 0 01.5 1z" fill="currentColor">
</svg>

                  </button>
                  <input
                    class="quantity__input"
                    type="number"
                    name="quantity"
                    id="Quantity-template--19917721043255__main"
                    data-cart-quantity="0"
                    data-min="1"
                    min="1"
                    
                    step="1"
                    value="1"
                    form="product-form-template--19917721043255__main"
                  />
                  <button class="quantity__button no-js-hidden" name="plus" type="button">
                    <span class="visually-hidden">Increase quantity for GG MARMONT QUILTED MINI BAG WITH CHAIN</span>
                    <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  fill="none"
  viewBox="0 0 10 10"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.51a.5.5 0 000 1h3.5l.01 3.5a.5.5 0 001-.01V5.5l3.5-.01a.5.5 0 00-.01-1H5.5L5.49.99a.5.5 0 00-1 .01v3.5l-3.5.01H1z" fill="currentColor">
</svg>

                  </button>
                </quantity-input>
                <div class="quantity__rules caption no-js-hidden"></div>
              </div>
<div ><product-form class="product-form" data-hide-errors="false">
      <div class="product-form__error-message-wrapper" role="alert" hidden>
        <svg
          aria-hidden="true"
          focusable="false"
          class="icon icon-error"
          viewBox="0 0 13 13"
        >
          <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
          <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
          <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
          <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
        </svg>
        <span class="product-form__error-message"></span>
      </div>
<form class="add-to-cart" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- Include any additional product information you want -->
    <input type="hidden" name="product_id" value="3">
    <button type="submit">Add to Cart</button>
</form>
<div class="button-container">
        <button class="animated-button">Click me</button>
    </div>
 <style>
   .add-to-cart button {
    background-color: #fff;
    color: #000;
    font-size: 20px;
    border: 2px solid #000;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease; /* Add more properties to the transition */
    padding: 15px 20px;
    box-sizing: border-box;
    margin-bottom: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0); /* Start with no box-shadow */
}

.add-to-cart button:hover {
    background-color: #eee;
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Add a subtle box-shadow on hover */
    color: #333; /* Change text color on hover */
}







.button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .animated-button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #3dc1da;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            overflow: hidden;
            transition: background-color 0.3s;
        }

        .animated-button:before,
        .animated-button:after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #fff;
            transform: scaleX(0);
            transform-origin: 0 0;
            transition: transform 0.3s;
        }

        .animated-button:after {
            top: 100%;
            transform-origin: 100% 100%;
        }

        .animated-button:hover {
            background-color: #36d09d;
        }

        .animated-button:hover:before,
        .animated-button:hover:after {
            transform: scaleX(1);
        }
    </style>

</product-form><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-pickup-availability.css?v=34645222959864780961688782258" rel="stylesheet" type="text/css" media="all" />
<pickup-availability
      class="product__pickup-availabilities no-js-hidden quick-add-hidden"
      
      data-root-url="/"
      data-variant-id="45789478682935"
      data-has-only-default-variant="true"
    >
      <template>
        <pickup-availability-preview class="pickup-availability-preview">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-unavailable"
  fill="none"
  viewBox="0 0 20 20"
>
  <path fill="#DE3618" stroke="#fff" d="M13.94 3.94L10 7.878l-3.94-3.94A1.499 1.499 0 103.94 6.06L7.88 10l-3.94 3.94a1.499 1.499 0 102.12 2.12L10 12.12l3.94 3.94a1.497 1.497 0 002.12 0 1.499 1.499 0 000-2.12L12.122 10l3.94-3.94a1.499 1.499 0 10-2.121-2.12z"/>
</svg>

          <div class="pickup-availability-info">
            <p class="caption-large">Couldn&#39;t load pickup availability</p>
            <button class="pickup-availability-button link link--text underlined-link">
              Refresh
            </button>
          </div>
        </pickup-availability-preview>
      </template>
    </pickup-availability>

    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/pickup-availability.js?v=7543877057949731971688782258" defer="defer"></script></div>
<div class="product__description rte quick-add-hidden" >
                  <div data-mce-fragment="1" bis_skin_checked="1">
<p>The Present Of The House Meets The Past With The Double G Detail. Items That Can Be Worn Season After Season Reinforce The Idea Of A Wardrobe That We Cherish. This Mini Chain Bag Is Crafted From Signature Black Herringbone Quilted Leather, While The Interior Features Two Card Slots.</p>
<ul>
<li>Black Herringbone Quilted Leather</li>
<li>Aged Gold Color Finishes</li>
<li>Moiré Microfiber Lining With Faux Suede Finish</li>
<li>Double-G</li>
<li>Interior: Two Card Slots And A Hook</li>
<li>Chain Shoulder Strap Height 57 Cm</li>
<li>Snap Button Closure</li>
<li>W 20cm X H 14.5cm X D 4cm</li>
<li>Made In Italy</li>
<li>Weight: About 0.45kg</li>
</ul>
</div>
<div class="ltr-jeopbd" data-mce-fragment="1" bis_skin_checked="1"></div>
                </div><a href="/products/gucci" class="link product__view-details animate-arrow">
          View full details
          <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

        </a>
      </product-info>
    </div></div>

  

<product-modal id="ProductModal-template--19917721043255__main" class="product-media-modal media-modal">
  <div
    class="product-media-modal__dialog"
    role="dialog"
    aria-label="Media gallery"
    aria-modal="true"
    tabindex="-1"
  >
    <button
      id="ModalClose-template--19917721043255__main"
      type="button"
      class="product-media-modal__toggle"
      aria-label="Close"
    >
      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

    </button>

    <div
      class="product-media-modal__content color-background-1 gradient"
      role="document"
      aria-label="Media gallery"
      tabindex="0"
    >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&width=550 550w,//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086 1000w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="//58194a.myshopify.com/cdn/shop/files/Gucci.webp?v=1688742086&width=1445"
    alt="GG MARMONT QUILTED MINI BAG WITH CHAIN"
    loading="lazy"
    width="1100"
    height="1469"
    data-media-id="34496927662391"
  >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&width=550 550w,//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086 1000w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="//58194a.myshopify.com/cdn/shop/files/GUCCI1.webp?v=1688742086&width=1445"
    alt="GG MARMONT QUILTED MINI BAG WITH CHAIN"
    loading="lazy"
    width="1100"
    height="1470"
    data-media-id="34496927695159"
  ></div>
  </div>
</product-modal>


  
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/product-modal.js?v=116616134454508949461688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/media-gallery.js?v=96661908581229995091688782258" defer="defer"></script><script>
    document.addEventListener('DOMContentLoaded', function () {
      function isIE() {
        const ua = window.navigator.userAgent;
        const msie = ua.indexOf('MSIE ');
        const trident = ua.indexOf('Trident/');

        return msie > 0 || trident > 0;
      }

      if (!isIE()) return;
      const hiddenInput = document.querySelector('#product-form-template--19917721043255__main input[name="id"]');
      const noScriptInputWrapper = document.createElement('div');
      const variantSwitcher =
        document.querySelector('variant-radios[data-section="template--19917721043255__main"]') ||
        document.querySelector('variant-selects[data-section="template--19917721043255__main"]');
      noScriptInputWrapper.innerHTML = document.querySelector(
        '.product-form__noscript-wrapper-template--19917721043255__main'
      ).textContent;
      variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

      document.querySelector('#Variants-template--19917721043255__main').addEventListener('change', function (event) {
        hiddenInput.value = event.currentTarget.value;
      });
    });
  </script><script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "GG MARMONT QUILTED MINI BAG WITH CHAIN",
      "url": "https:\/\/58194a.myshopify.com\/products\/gucci",
      "image": [
          "https:\/\/58194a.myshopify.com\/cdn\/shop\/files\/Gucci.webp?v=1688742086\u0026width=1920"
        ],
      "description": "\nThe Present Of The House Meets The Past With The Double G Detail. Items That Can Be Worn Season After Season Reinforce The Idea Of A Wardrobe That We Cherish. This Mini Chain Bag Is Crafted From Signature Black Herringbone Quilted Leather, While The Interior Features Two Card Slots.\n\nBlack Herringbone Quilted Leather\nAged Gold Color Finishes\nMoiré Microfiber Lining With Faux Suede Finish\nDouble-G\nInterior: Two Card Slots And A Hook\nChain Shoulder Strap Height 57 Cm\nSnap Button Closure\nW 20cm X H 14.5cm X D 4cm\nMade In Italy\nWeight: About 0.45kg\n\n\n",
      
      "brand": {
        "@type": "Brand",
        "name": "My Store"
      },
      "offers": [{
            "@type" : "Offer","availability" : "http://schema.org/InStock",
            "price" : 490.0,
            "priceCurrency" : "USD",
            "url" : "https:\/\/58194a.myshopify.com\/products\/gucci?variant=45789478682935"
          }
]
    }
  </script>
</section>


</section><section id="shopify-section-template--19917721043255__related-products" class="shopify-section section"><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-card.css?v=153897544549437130131688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-related-products.css?v=80324771040738084201688782258" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--19917721043255__related-products-padding {
    padding-top: 27px;
    padding-bottom: 21px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19917721043255__related-products-padding {
      padding-top: 36px;
      padding-bottom: 28px;
    }
  }</style><div class="color-background-1 gradient no-js-hidden">
  <product-recommendations
    class="related-products page-width section-template--19917721043255__related-products-padding isolate scroll-trigger animate--slide-in"
    data-url="/recommendations/products?section_id=template--19917721043255__related-products&product_id=8476805529911&limit=4"
  >
    
  </product-recommendations>
  </div>


</section>
    </main>

    <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--19917717176631__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-footer.css?v=125160298726032154631690038564" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-newsletter.css?v=4727253280200485261688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-payment.css?v=69253961410771838501688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-social.css?v=52211663153726659061688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-localization-form.css?v=14162097032368378391688782258" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 45px;
  }

  .section-sections--19917717176631__footer-padding {
    padding-top: 45px;
    padding-bottom: 39px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 60px;
    }

    .section-sections--19917717176631__footer-padding {
      padding-top: 60px;
      padding-bottom: 52px;
    }
  }</style><footer class="footer color-accent-1 gradient section-sections--19917717176631__footer-padding"><div class="footer__content-top page-width"><div
            class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in"
            
              data-cascade
            
          ><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 1;"
                
              ><h2 class="footer-block__heading inline-richtext">Company</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="aboutus.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              About Us
                            </a>
                          </li><li>
                            <a
                              href="https://wa.me/212650379345"
                               class="link link--text list-menu__item list-menu__item--link"
                            >
                              HELP
                            </a>
                          </li><li>
                            <a
                              href="https://wa.me/212650379345"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Request a Bag
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 2;"
                
              ><h2 class="footer-block__heading inline-richtext">Customer Service</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="privacy.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Privacy Policy
                            </a>
                          </li><li>
                            <a
                              href="refund.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Refund Policy
                            </a>
                          </li><li>
                            <a
                              href="shipping.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Shipping Policy
                            </a>
                          </li><li>
                            <a
                              href="termsofservice.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Terms of Service
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 3;"
                
              ><h2 class="footer-block__heading inline-richtext">Quick links</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="index.html"
                              class="link link--text list-menu__item list-menu__item--link list-menu__item--active"
                            >
                              Home page
                            </a>
                          </li><li>
                            <a
                              href="viewallcollections.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              All collections
                            </a>
                          </li><li>
                            <a
                              href="shopall.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              All products
                            </a>
                          </li></ul></div></div><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
          
            data-cascade
          
        ><ul class="footer__list-social list-unstyled list-social"><li class="list-social__item">
      <a href="https://www.instagram.com/selly.bags/" class="link list-social__link" ><svg aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 18 18">
  <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"/>
  <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z">
</svg>
<span class="visually-hidden">Instagram</span>
      </a>
    </li><li class="list-social__item">
      <a href="https://twitter.com/selly_bags" class="link list-social__link" ><svg aria-hidden="true" focusable="false" class="icon icon-twitter" viewBox="0 0 18 15">
  <path fill="currentColor" d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
</svg>
<span class="visually-hidden">Twitter</span>
      </a>
    </li><li class="list-social__item">
      <a href="https://www.pinterest.fr/Sellybags/" class="link list-social__link" ><svg aria-hidden="true" focusable="false" class="icon icon-pinterest" viewBox="0 0 17 18">
  <path fill="currentColor" d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
</svg>
<span class="visually-hidden">Pinterest</span>
      </a>
    </li></ul></div>
      </div>
</footer><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/localization-form.js?v=98683197766447567971688782258" defer="defer"></script>
</div>
<!-- END sections: footer-group -->

    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
      window.shopUrl = 'https://58194a.myshopify.com';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
      };
    </script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/predictive-search.js?v=162273246065392412141688782258" defer="defer"></script>

  </body>
</html>
