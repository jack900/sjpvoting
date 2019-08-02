
<!-- use app\modules\admin\models\Candidates;
use app\modules\admin\models\Campaign;
use app\modules\admin\models\Students;
 -->

<?php

/* @var $this yii\web\View */

//3DmscKELryiw1HU
$this->title = 'My Yii Application';
?>
<?php

 //$campaign = Campaign::findOne(1);
            $candidate = $campaign->candidates;


            // var_dump($candidate);
            // exit();
            $postion = 0;
            foreach ($candidate as $candi)
            {

              /* 

               $var_html = '<br><p>'. $value .'</p>';
              */
              if ($postion != $candi->position_id){
                $postion =  $candi->position_id;
              }
              ?> 

              <p><label><?php echo $candi->campaign_id ?></label> <?php echo $candi->platform ?> <?php echo $candi->student->firstname ?></p>

              
              <?php 

            }
            
            //deri na e echo ang mga value sa variable
           // return $campaign; campinn platform
       // }
            
?>






  <div class="content-wrapper" style="min-height: 484px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ballot Positions
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ballot Preview</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1" id="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid" id="9">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Best Villian - MCU Actors</b></h3>
              <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm moveup" data-id="9" disabled=""><i class="fa fa-arrow-up"></i> </button>
                        <button type="button" class="btn btn-default btn-sm movedown" data-id="9"><i class="fa fa-arrow-down"></i></button>
                    </div>
            </div>
            <div class="box-body">
              <p>You may select up to 5 candidates
                <span class="pull-right">
                  <button type="button" class="btn btn-success btn-sm btn-flat reset" data-desc="best-villian-mcu-actors"><i class="fa fa-refresh"></i> Reset</button>
                </span>
              </p>
              <div id="candidate_list">
                <ul>
                  
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/thanossmile.jpg" height="100px" width="100px" class="clist"><span class="cname clist">Josh  Brolin</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/AvengerIW4 (2).jpg" height="100px" width="100px" class="clist"><span class="cname clist">Tom Hiddleston</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/ultron.jpg" height="100px" width="100px" class="clist"><span class="cname clist">James Spader</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/hela.jpg" height="100px" width="100px" class="clist"><span class="cname clist">Cate Blanchett</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/killmongr.jpg" height="100px" width="100px" class="clist"><span class="cname clist">Michael B Jordan</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/reddd.jpg" height="100px" width="100px" class="clist"><span class="cname clist">Hugo Weaving</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red best-villian-mcu-actors" name="best-villian-mcu-actors[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/ebony.jpg" height="100px" width="100px" class="clist"><span class="cname clist">Tom Vaughan</span>
        </li>
      
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid" id="8">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Sample</b></h3>
              <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm moveup" data-id="8"><i class="fa fa-arrow-up"></i> </button>
                        <button type="button" class="btn btn-default btn-sm movedown" data-id="8" disabled=""><i class="fa fa-arrow-down"></i></button>
                    </div>
            </div>
            <div class="box-body">
              <p>You may select up to 5 candidates
                <span class="pull-right">
                  <button type="button" class="btn btn-success btn-sm btn-flat reset" data-desc="sample"><i class="fa fa-refresh"></i> Reset</button>
                </span>
              </p>
              <div id="candidate_list">
                <ul>
                  
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red sample" name="sample[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/mask.jpg" height="100px" width="100px" class="clist"><span class="cname clist">Mark Doe</span>
        </li>
      
        <li>
          <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red sample" name="sample[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><button class="btn btn-primary btn-sm btn-flat clist"><i class="fa fa-search"></i> Platform</button><img src="../images/Opi51c74ead38850.png" height="100px" width="100px" class="clist"><span class="cname clist">Bruno Jr</span>
        </li>
      
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
      
    </section>
       