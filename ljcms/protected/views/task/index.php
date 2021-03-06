<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/order.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->BaseUrl;?>/common/datePicker/WdatePicker.js"></script>
<div class="sectionTitle-A mb10">
    <h2>任务列表</h2>
</div>
<div class="clear mb10">
    <div class="sectionBun-A2 L">
        <a class="btn btn-primary" href="javascript:history.go(-1);">返回</a>
    </div>
    <div class="sectionSearch-A1 sectionForm-A1 sectionForm-A1-2 R sectionFloat-A1">
        <?php $ms = 'mold'; if(isset($_GET['space'])){$ms = 'space';} ?>
        <?php $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'user-form',
                    'method'=>'get',
                    'action'=>'/task/index/'.$ms,
                    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
          )); ?>
            <ul class="clear">
                <?php if(isset($_GET['space'])): ?>
                <li>
                    <label> </label>
                    <?php
                        echo CHtml::dropDownList('type',$seachData['type'],array('1'=>'渲染订单','2'=>'新空间渲染订单'),
                                array('separator'=>'&nbsp;','empty'=>'订单类型','style'=>'width:auto'));
                    ?>
                </li>
                <?php endif; ?>
                <li>
                    <label> </label>
                    <?php
                        echo CHtml::dropDownList('status',$seachData['status'],Yii::app()->params['orderStatus'],
                                array('separator'=>'&nbsp;','empty'=>'订单状态','style'=>'width:auto'));
                    ?>
                </li>
                <li>
                    <label> </label>
                    <input type="text" value="<?php echo !empty($seachData['name']) ? $seachData['name'] :''; ?>" name="name" class="text" placeholder="<?php echo isset($_GET['mold']) ? '订单名称/编号':'订单名称/编号/空间名称'; ?>"/>
                </li>
                <li>
                    <input class="input" type="text" placeholder=" 起始时间" name="timeStart" value="<?php echo !empty($seachData['timeStart'])?$seachData['timeStart']:''; ?>" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" size="20" style="margin-right: 20px;width: 100px" />
                </li>
                <li>
                    <input class="input" type="text" placeholder=" 截止时间" name="timeEnd" value="<?php echo !empty($seachData['timeEnd'])?$seachData['timeEnd']:''; ?>" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" size="20" style="margin-right: 20px;width: 100px" />
                </li>
                <li class="button">                                    
                    <input class="btn btn-large btn-primary" type="submit" value="查询">
                </li>
            </ul>				      		                   
        <?php $this->endWidget(); ?>
    </div>
</div>

<div class="sectionTable-A1 mb10">
    <table class="table table table-hover">
        <thead>
            <tr>
                <th class="col-1" width="10%">订单编号</th>
                <th class="col-1" width="10%">订单类型</th>
                <th class="col-1" width="10%">订单标题</th>
                <th class="col-2" width="23%">订单内容</th>
                <th class="col-3" width="17%">创建时间</th>
                <th class="col-4" width="14%">更新时间</th>
                <th class="col-4" width="6%">订单状态</th>
                <th class="col-5">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($taskOrder) && !empty($taskOrder)): ?>
            <?php foreach ($taskOrder as $model):?>
            <tr id="tr_<?php echo $model['id']; ?>">
                <td class="col-2"><?php echo $model['number']; ?></td>
                <td class="col-1">
                    <?php echo Yii::app()->params['orderType'][$model['type']]; ?><br>
                    <?php echo isset($_GET['space']) && !empty($model['space_name']) ? "空间：".$model['space_name'] :""; ?>
                </td>
                <td class="col-2"><?php echo $model['title']; ?></td>
                <td class="col-3"><?php echo mb_substr(strip_tags($model['content']),0,30,'utf8'); ?></td>
                <td class="col-4">
                    起始：<?php echo date("Y-m-d H:i:s", $model["create_time"]);?><br>
                    预结束：<?php echo date("Y-m-d H:i:s", $model["end_time"]);?>
                </td>
                <td class="col-5"><?php echo !empty($model["update_time"])?date("Y-m-d H:i:s",$model["update_time"]):'';?></td>
                <td class="col-6">
                    <?php echo $model['type']==1 ? Yii::app()->params['orderStatus'][$model['space_status']] : Yii::app()->params['orderStatus'][$model['status']]; ?>
                </td>
                <td class="col-7">
                    [<a href="/order/create/id/<?php echo $model['id']; ?>/task">查看订单</a>]<br>
                    <!--[<a href="javascript:void(0);" rel="<?php echo $model['id'];?>" sid="<?php echo isset($_GET['space']) && !empty($model['space_id']) ? $model['space_id'] :""; ?>">编辑状态</a>]<br>-->
                    [<a href="/task/info/oid/<?php echo $model['id']; ?><?php echo isset($_GET['space']) && !empty($model['space_id']) ? "/sid/".$model['space_id'] :""; ?>/allocation/1">查看详情</a>]<br>
                    <span>
                    </span>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php if(!empty($pages)): ?>
<div class="sectionFoot-B1">
    <div class="sectionFloat-A1 addpage_style">
        <div class="page_list">
        <?php $this->widget('CLinkPager', array(
            'header'=> ' ',
            "maxButtonCount"=>5,
            'pages' => $pages,
            'firstPageLabel'=>'&lt;&lt; 首页',
            'prevPageLabel'=>'&lt; 前页',
            'nextPageLabel'=>'后页 &gt;',
            'lastPageLabel'=>'末页 &gt;&gt;',
        ))?>
        </div>
    </div>
</div>
<?php endif; ?>