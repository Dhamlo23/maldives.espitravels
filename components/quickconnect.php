<div class="quick-connect">
    <div class="call qc-single" data-text="Call" id="call-button">
        <a href="tel:+918347835777" id="call-link">
            <i class="fa-light fa-phone"></i>
        </a>
    </div>
    <div class="whatsapp qc-single" data-text="WhatsApp">
        <a href="https://wa.me/918347835777" target="_blank" id="whatsapp-link" rel="noreferrer noopener">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>
</div>

<div id="call-popup-container" class="call-popup-container">
    <img id="call-popup" src="assets/images/espi-qr.webp" alt="Call Popup" class="call-popup img-fluid" />
    <p class="call-popup-text mb-0">Scan the QR to call</p>
</div>

<script>
    var currentURL = window.location.href;
    var encodedURL = encodeURIComponent(currentURL);
    var pageTitle = document.title;
    var encodedTitle = encodeURIComponent(pageTitle);
    var whatsappMessage = "https://api.whatsapp.com/send?phone=918347835777&text=Hey ESPI Travels, I went through your website maldives.espitravels.in, I need information regarding '" + encodedTitle + " " + encodedURL;
    document.getElementById("whatsapp-link").href = whatsappMessage;

    document.addEventListener("DOMContentLoaded", function() {
        var callButton = document.getElementById("call-button");
        var callLink = document.getElementById("call-link");
        var callPopupContainer = document.getElementById("call-popup-container");

        if (window.innerWidth > 768) {
            callLink.removeAttribute("href");
        }
        if (window.innerWidth < 768) {
            callLink.addAttribute("href");
        }

        callButton.addEventListener("click", function(event) {
            if (window.innerWidth > 768) {
                event.stopPropagation();
                callPopupContainer.style.display = "block";
            }
        });

        callPopupContainer.addEventListener("click", function(event) {
            event.stopPropagation();
        });

        document.addEventListener("click", function() {
            callPopupContainer.style.display = "none";
        });
    });
</script>

<style>
    .quick-connect {
        position: fixed;
        bottom: 50%;
        transform: translate(0, 50%);
        left: 0.3%;
        z-index: 999999;
        border-radius: 35px;
        background-color: var(--color-secondary);
    }

    .quick-connect a {
        color: #fff;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quick-connect a:not([href]):not([class]),
    .quick-connect a:not([href]):not([class]):hover {
        color: #fff;
    }


    .quick-connect .qc-single {
        font-size: 20px;
        height: 65px;
        width: 45px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all ease 0.3s;
    }

    .call {
        border-radius: 35px 35px 0 0;
    }

    .whatsapp {
        border-radius: 0 0 35px 35px;
    }

    .qc-single:hover {
        background-color: var(--color-secondary_hover);
    }

    .hidden-txt {
        display: none
    }

    @media(max-width:768px) {
        .quick-connect {
            position: fixed;
            bottom: 8px;
            left: 50%;
            z-index: 999999;
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(-50%, 0);
            height: 54px;
            overflow: hidden;
        }

        .qc-single::before {
            top: -40% !important;
            left: 0 !important;
            transform: translate(42%, -50%) !important;
        }

        .quick-connect .qc-single {
            margin: 0;
            width: 100%;
            border-radius: 0
        }

        .qc-single:hover::after {
            opacity: 0 !important;
            visibility: hidden !important;
        }

        .footer__copyright {
            padding-bottom: 60px;
        }

        .call-popup-container {
            display: none !important;
        }

        .back-to-top-btn {
            bottom: 16px;
            right: 50%;
            transform: translate(50%, 0%);
            z-index: 9999999;
        }
    }

    .qc-single {
        position: relative;
    }

    .qc-single::before {
        content: attr(data-text);
        position: absolute;
        background-color: rgb(33 37 41);
        color: #fbf9fd;
        padding: 0.4rem 1rem;
        font-size: 14px;
        border-radius: 4px;
        white-space: nowrap;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        top: 50%;
        left: 110%;
        transform: translateY(-50%);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
        z-index: 10;
    }

    .qc-single:hover::before {
        opacity: 1;
        visibility: visible;
    }

    .qc-single::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 100%;
        transform: translateY(-50%);
        border-width: 6px;
        border-style: solid;
        border-color: transparent transparent transparent rgb(33 37 41);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }

    .qc-single:hover::after {
        opacity: 1;
        visibility: visible;
    }

    .call-popup-container {
        position: fixed;
        left: 60px;
        bottom: 50%;
        transform: translate(0, 50%);
        display: none;
        text-align: center;
        z-index: 100000;
        background: var(--color-secondary);
        padding: 15px;
        border-radius: 20px;
    }

    .call-popup {
        width: 120px;
        height: auto;
        border-radius: 10px
    }

    .call-popup-text {
        margin: 5px 0 0 0;
        font-size: 14px;
        color: #fff;
    }
</style>