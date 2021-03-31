

 <div id="share" class="ftco-footer-widget mb-4 form">
            <h2 class="ftco-heading-2">Share Link to Your Friends</h2>
            <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate">
                    <a href="https://twitter.com/share?url=<?echo $url?>&text=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
                        <span class="icon-twitter"></span>
                    </a>
                </li>
                <li class="ftco-animate">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?echo $url?>&t='Telcome proder'" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
                        <span class="icon-facebook"></span>
                    </a>
                </li>
                <li class="ftco-animate">
                    <a href="mailto:?subject=[SUBJECT]&body=<?echo $url?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Mail" >
                        <span class="icon-google"></span>
                    </a>
                </li>
                <li class="ftco-animate">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?echo $url?>&t=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin" >
                        <span class="icon-linkedin"></span>
                    </a>
                </li> <li class="ftco-animate">
                    <a href="https://wa.me/?text=<?echo $url?>" alt="Whatsapp" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">
                        <span class="icon-whatsapp"></span>
                    </a>
                </li>
            </ul>
    <div>
        <input type="text" id='url' value="<?echo $url?>" readonly>
        <button type="Button" onclick="url()">Copy Code</button>
    </div>     
</div>
