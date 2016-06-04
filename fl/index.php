<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"> 
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<?php echo GetHeader(); ?>
<link rel="stylesheet" type="text/css" href="templates/cn/css/style.css">
<script type="text/javascript" src="templates/cn/js/jquery.js"></script>
<script type="text/javascript" src="templates/cn/js/ext.js"></script>
</head>
<body>
    <?php require_once('header.php'); ?>
    <?php require_once('morebanner.php'); ?>
    <div class="main">
        <ul class="product_list">
            <?php
                $dosql->Execute("SELECT id,classname,picurl FROM `#@__infoclass` WHERE parentid=1 AND checkinfo=true ORDER BY orderid asc LIMIT 0,5");
                while($row = $dosql->GetArray())
                {
                        if($row['linkurl'] != '')$gourl = $row['linkurl'];
                        else $gourl = 'javascript:;';
            ?>
            <li>
                <a href="<?php echo $gourl; ?>">
                    <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" title="<?php echo $row['title']; ?>"/>
                </a>
                <p class="pro_title">硬臂式机械手</p>
                <p class="click_more_description">由于系统基本是刚性臂杆结构组成，它与气动平衡吊和软索式助力机械手一样都具
                    有全行程“漂浮”功能，区别是在有扭矩产生的情况下无法使用气动平衡吊或是软索式助力......</p>
                <p class="click_more_icon"><a href="">了解更多</a></p>
            </li>
            <?php
                }
            ?>
            <li>
                <a href="">
                    <img src="../images/index_pro_01.gif" alt="" title=""/>
                </a>
                <p class="pro_title">硬臂式机械手</p>
                <p class="click_more_description">由于系统基本是刚性臂杆结构组成，它与气动平衡吊和软索式助力机械手一样都具
                    有全行程“漂浮”功能，区别是在有扭矩产生的情况下无法使用气动平衡吊或是软索式助力......</p>
                <p class="click_more_icon"><a href="">了解更多</a></p>
            </li>
            <li>
                <a href="">
                    <img src="../images/index_pro_01.gif" alt="" title=""/>
                </a>
                <p class="pro_title">硬臂式机械手</p>
                <p class="click_more_description">由于系统基本是刚性臂杆结构组成，它与气动平衡吊和软索式助力机械手一样都具
                    有全行程“漂浮”功能，区别是在有扭矩产生的情况下无法使用气动平衡吊或是软索式助力......</p>
                <p class="click_more_icon"><a href="">了解更多</a></p>
            </li>
            <li>
                <a href="">
                    <img src="../images/index_pro_01.gif" alt="" title=""/>
                </a>
                <p class="pro_title">硬臂式机械手</p>
                <p class="click_more_description">由于系统基本是刚性臂杆结构组成，它与气动平衡吊和软索式助力机械手一样都具
                    有全行程“漂浮”功能，区别是在有扭矩产生的情况下无法使用气动平衡吊或是软索式助力......</p>
                <p class="click_more_icon"><a href="">了解更多</a></p>
            </li>
            <li>
                <a href="">
                    <img src="../images/index_pro_01.gif" alt="" title=""/>
                </a>
                <p class="pro_title">硬臂式机械手</p>
                <p class="click_more_description">由于系统基本是刚性臂杆结构组成，它与气动平衡吊和软索式助力机械手一样都具
                    有全行程“漂浮”功能，区别是在有扭矩产生的情况下无法使用气动平衡吊或是软索式助力......</p>
                <p class="click_more_icon"><a href="">了解更多</a></p>
            </li>
        </ul>
        <div class="news_about_mv">
            <div class="news_list_index">
                <p class="news_list_title">新闻中心 News</p>
                <p class="news_list_decription">软索式机械手的功能与气动平衡吊类似，具有全程的“漂浮”功能。由于主机和夹具间通过一钢丝绳连接......</p>
                <ul>
                    <li><a href="">5月10日，机械新品发布</a></li>
                    <li><a href="">5月10日，机械新品发布</a></li>
                    <li><a href="">5月10日，机械新品发布</a></li>
                    <li><a href="">5月10日，机械新品发布</a></li>
                    <li><a href="">5月10日，机械新品发布</a></li>
                </ul>
                <p class="news_list_more_icon"><a href="">查看更多>></a></p>
            </div>
            <div class="aboutus_index">
                <p class="news_list_title">公司简介 Company</p>
                <p><img src="../images/index_about.gif"/></p>
                <p class="about_description">费兰智能设备(上海）有限公司于2010年在上海成立，是一家集生产、技术、服务于一体的独资企业。主要生产 archer品牌的助力机械设备，目前在中国......</p>
            </div>
            <div class="mv_index">
                <img src="../images/index_mv.gif" alt="" title=""/>
            </div>
        </div>
    </div>
    <div class="company_cooperation">
        <div class="company_cooperation_center">
        </div>
    </div>
    <div class="footer_banner">
        <div class="scrollcon">
            <div class="LeftBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
            <div class="Cont" id="ISL_Cont">
                <div class="ScrCont">
                    <div id="List1">
                        <!-- 图片列表 begin -->
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_02.gif"  /></a>
                            <p>通用汽车</p>
                        </div> 
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_03.gif" /></a>
                            <p>通用汽车</p>
                        </div>
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_04.jpg"></a>
                            <p>通用汽车</p>
                        </div> 
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_05.gif"></a>
                            <p>通用汽车</p>
                        </div>
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_06.gif"></a>
                            <p>通用汽车</p>
                        </div>
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_01.jpg"></a>
                            <p>通用汽车</p>
                        </div>
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_05.gif"></a>
                            <p>通用汽车</p>
                        </div>
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_06.gif"></a>
                            <p>通用汽车</p>
                        </div>
                        <div class="pic">
                            <a title="" href="javascript:void(0);"><img alt="" src="../images/logo_other_01.jpg"></a>
                            <p>通用汽车</p>
                        </div>
                        <!-- 图片列表 end -->
                    </div>
                    <div id="List2"></div>
                </div>
            </div>
            <div class="RightBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
	</div>
    </div>
    <?php require_once('footer.php'); ?>
<script type="text/javascript">
    //图片滚动列表
    var Speed = 0.01;//速度(毫秒)
    var Space = 5;//每次移动(px)
    var PageWidth = 182;//翻页宽度
    var fill = 0;//整体移位
    var MoveLock = false;
    var MoveTimeObj;
    var Comp = 0;
    var AutoPlayObj = null;
    GetObj("List2").innerHTML = GetObj("List1").innerHTML;
    GetObj('ISL_Cont').scrollLeft = fill;
    GetObj("ISL_Cont").onmouseover = function(){
            clearInterval(AutoPlayObj);
    }
    GetObj("ISL_Cont").onmouseout = function(){
            AutoPlay();
    }

    AutoPlay();

    function GetObj(objName){
            if(document.getElementById){
                    return eval('document.getElementById("'+objName+'")')
            }else{
                    return eval('document.all.'+objName)
            }
    }

    function AutoPlay(){ //自动滚动
            clearInterval(AutoPlayObj);
            AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',2000);//间隔时间
    }

    function ISL_GoUp(){ //上翻开始
            if(MoveLock) return;
            clearInterval(AutoPlayObj);
            MoveLock = true;
            MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
    }

    function ISL_StopUp(){ //上翻停止
            clearInterval(MoveTimeObj);
            if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
                    Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
                    CompScr();
            }else{
                    MoveLock = false;
            }
            AutoPlay();
    }

    function ISL_ScrUp(){ //上翻动作
            if(GetObj('ISL_Cont').scrollLeft <= 0){
                    GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth
            }
                    GetObj('ISL_Cont').scrollLeft -= Space ;
    }

    function ISL_GoDown(){ //下翻
            clearInterval(MoveTimeObj);
            if(MoveLock) return;
            clearInterval(AutoPlayObj);
            MoveLock = true;
            ISL_ScrDown();
            MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
    }
    function ISL_StopDown(){ //下翻停止
            clearInterval(MoveTimeObj);
            if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
                    Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
                    CompScr();
            }else{
                    MoveLock = false;
            }
            AutoPlay();
    }

    function ISL_ScrDown(){ //下翻动作
            if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){
                    GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;
            }
            GetObj('ISL_Cont').scrollLeft += Space ;
    }

    function CompScr(){
            var num;
            if(Comp == 0){
                    MoveLock = false;return;
            }
            if(Comp < 0){ //上翻
                    if(Comp < -Space){
                            Comp += Space;
                            num = Space;
                    }else{
                            num = -Comp;
                            Comp = 0;
                    }
                    GetObj('ISL_Cont').scrollLeft -= num;
                    setTimeout('CompScr()',Speed);
            }else{ //下翻
                    if(Comp > Space){
                            Comp -= Space;
                            num = Space;
                    }else{
                            num = Comp;
                            Comp = 0;
                    }
                    GetObj('ISL_Cont').scrollLeft += num;
                    setTimeout('CompScr()',Speed);
            }
    }
</script>
</body>
</html>