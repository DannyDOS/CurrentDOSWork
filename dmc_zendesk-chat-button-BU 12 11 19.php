
<!-- HTML -->
<button class="mock-chat">
    <svg class="mock-chat__icon" id="Layer_1" x="0" y="0" viewBox="0 0 15 16" xml:space="preserve" aria-hidden="true">
        <title></title>
        <path d="M1.3,16c-0.7,0-1.1-0.3-1.2-0.8c-0.3-0.8,0.5-1.3,0.8-1.5c0.6-0.4,0.9-0.7,1-1c0-0.2-0.1-0.4-0.3-0.7c0,0,0-0.1-0.1-0.1 C0.5,10.6,0,9,0,7.4C0,3.3,3.4,0,7.5,0C11.6,0,15,3.3,15,7.4s-3.4,7.4-7.5,7.4c-0.5,0-1-0.1-1.5-0.2C3.4,15.9,1.5,16,1.5,16 C1.4,16,1.4,16,1.3,16z M3.3,10.9c0.5,0.7,0.7,1.5,0.6,2.2c0,0.1-0.1,0.3-0.1,0.4c0.5-0.2,1-0.4,1.6-0.7c0.2-0.1,0.4-0.2,0.6-0.1 c0,0,0.1,0,0.1,0c0.4,0.1,0.9,0.2,1.4,0.2c3,0,5.5-2.4,5.5-5.4S10.5,2,7.5,2C4.5,2,2,4.4,2,7.4c0,1.2,0.4,2.4,1.2,3.3 C3.2,10.8,3.3,10.8,3.3,10.9z"></path>
    </svg>
    <span class="mock-chat__text">Chat</span>
</button>
<!-- HTML END -->

<!-- CSS -->
<style>
    .mock-chat,
    .chat-error {
        font-family: 'work sans', arial, sans-serif;
        color: #4D4A49;
        font-size: 16px;
    }
    
    .mock-chat p,
    .chat-error p {
        margin-top: 1em;
        margin-bottom: 1em;
    }
    
    .mock-chat p a,
    .chat-error p a {
        color: #005D6E;
        text-decoration: underline;
    }
    
    .mock-chat p a:hover,
    .chat-error p a:hover {
        color: #1B9FA8;
    }
    
    .mock-chat {
        position: fixed;
        bottom: 13px;
        right: 21px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-weight: 500;
        border: none;
        background: #593620;
        color: white;
        border-radius: 100px;
        transition: width 0.4s;
        will-change: width;
        cursor: pointer;
        outline: none;
        padding: 13px 11px;
        width: 46px;
        height: 46px;
        z-index: 999998;
    }
    
    @media (min-width: 768px) {
        .mock-chat {
            padding: 13px 20px;
            width: 109px;
        }
    }
    
    .mock-chat--loading {
        width: 47px;
        font-size: 18px;
        padding: 13px 0px;
    }
    
    .mock-chat__spinner {
        position: relative;
        top: 1px;
        right: 1px;
    }
    
    .mock-chat__icon {
        height: 20px;
        width: 24px;
        fill: white;
        display: inline-block;
    }
    
    @media (min-width: 768px) {
        .mock-chat__icon {
            padding-right: 5px;
        }
    }
    
    .mock-chat__text {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, Arial, sans-serif;
        font-size: 15px;
        font-weight: 700;
        display: inline-block;
        vertical-align: middle;
        letter-spacing: 0.6px;
        display: none;
    }
    
    @media (min-width: 768px) {
        .mock-chat__text {
            display: inline;
        }
    }
    
    .zEWidget-launcher--pushup,
    .mock-chat--pushup {
        bottom: 66px !important;
    }
    
    @media (min-width: 1293px) {
        .zEWidget-launcher--pushup,
        .mock-chat--pushup {
            bottom: 13px !important;
        }
    }
    
    .chat-error {
        position: fixed;
        bottom: 0;
        background: #fff;
        width: 96%;
        left: 0;
        margin-left: 2%;
        margin-right: 2%;
        box-shadow: -4px 4px 4px rgba(0, 0, 0, 0.2);
        border-top: 4px solid #593620;
        border-radius: 2px;
        z-index: 999999;
        opacity: 0;
        visibility: hidden;
        transition: 0.2s;
    }
    
    .chat-error--active {
        visibility: visible;
        opacity: 1;
        bottom: 10px;
    }
    
    .chat-error__close {
        position: absolute;
        top: -4px;
        right: 5px;
        font-size: 36px;
        opacity: 0.6;
        cursor: pointer;
    }
    
    .chat-error__close:hover {
        opacity: 1;
    }
    
    @media (min-width: 768px) {
        .chat-error {
            width: 300px;
            left: auto;
            right: 10px;
            margin-left: 0;
            margin-right: 0;
        }
        .chat-error__close {
            top: -2px;
            font-size: 26px;
        }
    }
</style>
<!-- CSS END -->

<!-- JS -->
<script>
    class ZenLoad {
        constructor() {
            this.loadBtn = document.querySelector('.mock-chat');
            this.btnIcon = document.querySelector('.mock-chat__icon');
            this.countDownBanner = document.querySelector('#count-close');
            this.init();
        }
        addEvents() {
            // Add events
            this.loadBtn.addEventListener('click', this.insertScript.bind(this));
        }
        insertScript() {
            this.loadBtn.removeEventListener('click', this.insertScript.bind(this));
            // Insert Script
            const tag = document.createElement('script');
            tag.setAttribute('id', 'ze-snippet');
            tag.setAttribute('src', 'https://static.zdassets.com/ekr/snippet.js?key=e80c9990-c43a-4a90-82f1-52511c751eaa');
            document.body.appendChild(tag);
            this.loading();
        }
        loading() {
            this.addLoadingSpinner()
                // loading
            let counter = 0;
            const loadCheck = setInterval(() => {
                const widget = document.querySelector('.zEWidget-launcher--active');
                if (widget) {
                    // loaded
                    clearInterval(loadCheck);
                    this.widget = widget;
                    this.removeButton();
                    this.activateChat();
                }
                if (counter > 150) {
                    clearInterval(loadCheck);
                    this.errorMessage();
                    this.removeButton();
                }
                counter++
            }, 100);
        }
        addLoadingSpinner() {
            this.loadBtn.classList.add('mock-chat--loading');
            this.loadBtn.innerHTML = '<i class="mock-chat__spinner fas fa-spinner spin-animation color-white"></i>';
        }
        removeButton() {
            // Remove button
            this.loadBtn.parentNode.removeChild(this.loadBtn);
        }
        activateChat() {
            // activate chat
            $zopim(function() {
                $zopim.livechat.window.setColor('#593620');
                $zopim.livechat.window.show();
            });
            if (this.countDownBanner) {
                this.widget.classList.add('.zEWidget-launcher--pushup');
            }
        }
        errorMessage() {
            const errorMarkup = `
        <div class="chat-error colour-grey5 p-4">
            <div class="chat-error__close">&times;</div>
            <div class="font-weight-5 text-center">There was an error loading our chat feature</div>
            <p>If you'd like some help or advice, please contact us by either submitting your question <a href="/gbu0-dynform/contact_form_new.html">online</a>, emailing us at <a href="mailto:sales@worktop-express.co.uk">sales@worktop-express.co.uk</a> or calling us on <a href="tel:03452222644">0345 22 22 644</a>.
            </p>
        </div>`;
            this.loadBtn.insertAdjacentHTML('afterEnd', errorMarkup);
            this.errorMessageSetup();
        }
        errorMessageSetup() {
            const errorEl = document.querySelector('.chat-error');
            errorEl.classList.add('chat-error--active');
            const errorCls = errorEl.querySelector('.chat-error__close');
            const closeMessage = () => {
                errorEl.classList.remove('chat-error--active');
                setTimeout(() => errorEl.parentNode.removeChild(errorEl), 300);
            }
            errorCls.addEventListener('click', closeMessage);
            setTimeout(closeMessage, 10000);
        }
        init() {
            // ZenLoad init
            this.addEvents();
            if (this.countDownBanner) {
                this.loadBtn.classList.add('mock-chat--pushup')
            }
        }
    }
    new ZenLoad();
</script>
<!-- JS END -->



<!-- Start of worktopexpressde Zendesk Widget script - DE -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=f2e90ce3-be37-40b1-9960-d7775c731389"> </script>
<!-- End of worktopexpressde Zendesk Widget script -->