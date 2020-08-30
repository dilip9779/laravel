@include('header')
@include('aside')
<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline fa-spin"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Work</span>
                  <span class="info-box-number">2,491</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-tasks faa-wrench animated"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Partwork</span>
                  <span class="info-box-number">17,317</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
			   <span class="info-box-icon bg-green"><i class="fa fa-check faa-pulse animated "></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Completed Partwork</span>
                  <span class="info-box-number">11,255</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-cog fa-spin"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total In Progress Partwork</span>
                  <span class="info-box-number">4,185</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-pause-circle faa-tada animated"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Not Started Partwork</span>
                  <span class="info-box-number">1,877</span>
                </div>
              </div>
            </div>			
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline faa-tada animated "></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Employee</span>
                  <span class="info-box-number">1,867</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-building faa-flash animated"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Offices</span>
                  <span class="info-box-number">339</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-user-secret faa-float animated "></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Contractors</span>
                  <span class="info-box-number">2,937</span>
                </div>
              </div>
            </div>            
			<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-user faa-burst animated "></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total SSO Users</span>
                  <span class="info-box-number">1,084</span>
                </div>
              </div>
            </div>
			<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-area-chart faa-float animated "></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Financial Year</span>
                  <span class="info-box-number" id="change_fin_year">2020-21</span>
                </div>
              </div>
            </div>			
          </div>
		  </div>
		<div class="box">
			<div class="box-body">
                <div class="col-md-6">
                  <p class="text-center">
                    <strong>Work Proposed Graph </strong>
                  </p>
                  <div class="progress-group">
                    <span class="progress-text">Total Approved Work</span>
                    <span class="progress-number"><b>1,334</b>/1,705</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green progress-bar-striped" style="width: 78.24%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Total Submitted Work</span>
                    <span class="progress-number"><b>0</b>/1,705</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow progress-bar-striped" style="width: 0.00%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Total Rejected Work</span>
                    <span class="progress-number"><b>371</b>/1,705</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red progress-bar-striped" style="width: 21.76%"></div>
                    </div>
                  </div>
                </div>	
                <div class="col-md-6">
                  <p class="text-center">
                    <strong>PartWork Proposed Graph </strong>
                  </p>
                  <div class="progress-group">
                    <span class="progress-text">Total Approved PartWork</span>
                    <span class="progress-number"><b>1,845</b>/2,242</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green progress-bar-striped" style="width: 82.29%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Total Submitted PartWork</span>
                    <span class="progress-number"><b>12</b>/2,242</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow progress-bar-striped" style="width: 0.54%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Total Rejected PartWork</span>
                    <span class="progress-number"><b>385</b>/2,242</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red progress-bar-striped" style="width: 17.17%"></div>
                    </div>
                  </div>
                </div>				
                </div>		  
           </div>
		<div class="box">
			<div class="box-body">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>Partwork Summary</strong>
                  </p>				  
                  <div class="progress-group">
                    <span class="progress-text">Schedule B and Workorder Value Not Matching</span>
                    <span class="progress-number"><b>1,219</b>/17,317</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red progress-bar-striped" style="width: 7.04%"></div>
                    </div>
                  </div>

                  <div class="progress-group">
                    <span class="progress-text">Stipulated Date of Completion is crossed but Physical Progress is Less Than 100%</span>
                    <span class="progress-number"><b>1,206</b>/17,317</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red progress-bar-striped" style="width: 6.96%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Time Limit File Forwarded But Not Approved</span>
                    <span class="progress-number"><b>139</b>/17,317</span>
                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red progress-bar-striped" style="width: 0.80%"></div>
                    </div>
                  </div>
                </div>				
                </div>		  
           </div>		   
        </section>
</div>
  @include('footer')