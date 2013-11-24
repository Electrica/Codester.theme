<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div id="content">
        <div class="ic"></div>
        <div class="container">
            <div class="row">
                <article class="span8">
                    <?php echo $content; ?>
                </article>
                <article class="span4">

                    <h3 class="extra">Поиск</h3>

                    <form id="search" action="#" method="GET" accept-charset="utf-8">
                        <div class="clearfix">
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''"
                                   onFocus="if(this.value =='' ) this.value=''">
                            <a href="#" onClick="document.getElementById('search').submit()"
                               class="btn btn-1">Search</a></div>
                    </form>
                    <h3>Categories</h3>
                    <ul class="list extra extra1">
                        <li><a href="#">Vonsequat</a></li>
                        <li><a href="#">Utdminim veniam</a></li>
                        <li><a href="#">Qullamcorper</a></li>
                        <li><a href="#">Suscipitlobortis</a></li>
                        <li><a href="#">Comnsequat</a></li>
                        <li><a href="#">Duendrerit</a></li>
                        <li><a href="#">Facilisis</a></li>
                        <li><a href="#">Luptatum</a></li>
                        <li><a href="#">Qui blandit</a></li>
                    </ul>
                    <h3>Archive</h3>

                    <div class="wrapper">
                        <ul class="list extra2 list-pad ">
                            <li><a href="#">May 2012</a></li>
                            <li><a href="#">April 2012</a></li>
                            <li><a href="#">March 2012</a></li>
                            <li><a href="#">February 2012</a></li>
                            <li><a href="#">January 2012</a></li>
                            <li><a href="#">December 2011</a></li>
                        </ul>
                        <ul class="list extra2">
                            <li><a href="#">November 2012</a></li>
                            <li><a href="#">October 2012</a></li>
                            <li><a href="#">September 2012</a></li>
                            <li><a href="#">August 2012</a></li>
                            <li><a href="#">July 2012</a></li>
                            <li><a href="#">June 2012</a></li>
                        </ul>

                    </div>
                </article>
            </div>
        </div>
    </div>
<?php $this->endContent(); ?>