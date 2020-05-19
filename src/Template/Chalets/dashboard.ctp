<div class="right_col" role="main">
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h1>List of Chalets</h1>
                    <div class="clearfix">
                        <h4><?= $this->Html->link('+ Add new Chalet', array('controller'=>'chalets','action'=>'add'),['class'=>'btn btn-primary']); ?></h4>
                    </div>
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr align="center">
                                <th width="100%" align="center">Chalets</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">
                                    <!-- all -->
                                    <table border="0" width="100%" cellpadding="5" cellspacing="0">
                                        <tr>
                                            <td style="background: #ffffff" align="right" valign="top" colspan="2">
                                                <table border="1" width="100%" bordercolor="#dddddd">
                                                    <tr>
                                                        <td width="75%" align="center">
                                                            <h3 style="margin: 5px">
                                                                <div class="fa fa-arrows"></div>
                                                            </h3>
                                                        </td>
                                                        <td width="20%" align="center"><input type="checkbox" class="js-switch" checked name="C3" value="ON"></td>
                                                        <td width="5%" align="right"><a style="margin: 0px; width: 140px" href="Chalet-edit.php"  class="btn btn-success btn-bg">Edit</a>   </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" width="100%" valign="top">
                                                <table border="0" width="100%" class="table table-striped table-bordered dt-responsive nowrap">
                                                    <tr>
                                                        <td align="right" width="30%">#101</td>
                                                        <td align="right" width="70%"><strong>chalet lolo</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="30%">450</td>
                                                        <td align="right" width="70%">Weekdays</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="30%">450</td>
                                                        <td align="right" width="70%">Weekend</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="30%">850</td>
                                                        <td align="right" width="70%">Week</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td align="right" width="0" valign="top"><?= $this->Html->image('admin/Chalet.jpg',['border'=>'0','width'=>'140', 'height'=>'140']);?></td>
                                        </tr>
                                    </table>
                                    <table border="0" width="100%">
                                        <tr>
                                            <td align="center"><?= $this->Html->image('admin/Date.png',['border'=>'0','width'=>'300']);?><br><a style="margin-top: 5px; width: 300px" href="#"  class="btn btn-warning">Apply</a></td>
                                        </tr>
                                    </table>
                                    <!-- all -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <!-- all -->
                                    <table border="0" width="100%" cellpadding="5" cellspacing="0">
                                        <tr>
                                            <td style="background: #ffffff" align="right" valign="top" colspan="2">
                                                <table border="1" width="100%" bordercolor="#dddddd">
                                                    <tr>
                                                        <td width="75%" align="center">
                                                            <h3 style="margin: 5px">
                                                                <div class="glyphicon glyphicon-arrow-up">
                                                                    &nbsp;&#124;&nbsp;
                                                                    <div class="glyphicon glyphicon-arrow-down"></div>
                                                            </h3>
                                                        </td>
                                                        <td width="20%" align="center"><input type="checkbox" class="js-switch" name="C3" value="ON"></td>
                                                        <td width="5%" align="right"><a style="margin: 0px; width: 140px" href="Chalet-edit.php"  class="btn btn-success btn-bg">Edit</a>   </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td align="right" width="100%" valign="top">
                                        <table border="0" width="100%" class="table table-striped table-bordered dt-responsive nowrap">
                                        <tr>
                                        <td align="right" width="30%">#333</td>
                                        <td align="right" width="70%"><strong>Chalet khalifa</strong></td>
                                        </tr>
                                        <tr>
                                        <td align="right" width="30%">600</td>
                                        <td align="right" width="70%">Weekdays</td>
                                        </tr>
                                        <tr>
                                        <td align="right" width="30%">500</td>
                                        <td align="right" width="70%">Weekend</td>
                                        </tr>
                                        <tr>
                                        <td align="right" width="30%">1000</td>
                                        <td align="right" width="70%">Week</td>
                                        </tr>
                                        </table>
                                        </td>
                                        <td align="right" width="0" valign="top"> <?= $this->Html->image('admin/Chalet.jpg',['border'=>'0','width'=>'140', 'height'=>'140']);?></td>
                                        </tr>
                                    </table>
                                    <table border="0" width="100%">
                                    <tr>
                                    <td align="center"><?= $this->Html->image('admin/Date.png',['border'=>'0','width'=>'300']);?><br><a style="margin-top: 5px; width: 300px" href="#"  class="btn btn-warning">Apply</a></td>
                                    </tr>
                                    </table>
                                    <!-- all -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- /User Blocked -->          
        </div>
        <!-- /footer content -->
    </div>
</div>