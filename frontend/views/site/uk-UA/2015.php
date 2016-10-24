<?php
$result = false;
 $filePath = '../markup/images/archive/2015/photogallery';
 if ($handle = opendir('/home/i/ibabych/conf.pm-edu.org/public_html/markup/images/archive/2015/photogallery')) {
    while (false !== ($file = readdir($handle))) {
        if (preg_match('/jpg$/', strtolower($file))){
            $result[] = $filePath . '/' . $file;
        }
        
    }
    closedir($handle);
}
$this->title = 'Архів конференції 2015 року | Міжнародна конференція з управління проектами, програмами, портфелями';
?>
<section id="insidePhoto">
    <div class="container">
        <h2>Архів конференції 2015 року</h2>

        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab" class="hvr-bubble-bottom"><i
                            class="fa fa-picture-o" aria-hidden="true"></i> Фотоархів конференції</a></li>
                <li><a href="#tab-2" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-list-alt"
                                                                                    aria-hidden="true"></i> Презентації доповідей</a></li>
                <li><a href="#tab-3" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-sticky-note-o"
                                                                                    aria-hidden="true"></i> Статті</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                   <div class="tab-gallery">
                       <?php foreach($result as $item): ?>
                        <a class="gallery" rel="group" href="<?php echo $item; ?>">
                           <img src="<?php echo $item; ?>" class="img-responsive"/>
                        </a>
                        <?php endforeach; ?>
                   </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/01">
                            <img src="/markup/images/archive/2015/presentations/01/01.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/02">
                            <img src="/markup/images/archive/2015/presentations/02/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/03">
                            <img src="/markup/images/archive/2015/presentations/03/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/04">
                            <img src="/markup/images/archive/2015/presentations/04/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/05">
                            <img src="/markup/images/archive/2015/presentations/05/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/06">
                            <img src="/markup/images/archive/2015/presentations/06/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/07">
                            <img src="/markup/images/archive/2015/presentations/07/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/08">
                            <img src="/markup/images/archive/2015/presentations/08/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/09">
                            <img src="/markup/images/archive/2015/presentations/09/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/10">
                            <img src="/markup/images/archive/2015/presentations/10/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/11">
                            <img src="/markup/images/archive/2015/presentations/11/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/12">
                            <img src="/markup/images/archive/2015/presentations/12/1.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/13">
                            <img src="/markup/images/archive/2015/presentations/13/1.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2015/presentations/14">
                            <img src="/markup/images/archive/2015/presentations/14/01.JPG" alt="">
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <a href="../markup/images/archive/2015/ConferencePapers2015.rar" class="hvr-shutter-out-horizontal download" download>
                        <p>Завантажити опубліковані статті</p> <i class="fa fa-download" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
