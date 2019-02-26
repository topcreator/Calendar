<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <title>Freight Forwarding Operations, Shipment Tracking Powered by CDM Software Solutions, Inc.</title>
  <link REL="SHORTCUT ICON" HREF="https://cdmsoft.com/cdm.ico">
  <link media="screen" rel="stylesheet" type="text/css" href="css/style.css"  />
  <!--script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script-->
	<!--[if lte IE 6]><link media="screen" rel="stylesheet" type="text/css" href="css/admin-ie.css" /><![endif]-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type="text/css">
    .calendar-wrapper {
      display: flex;
      align-items: center;
    }
    .calendar-wrapper button {
      height: 25px;
      padding: 0;
      margin-left: 3px;
    }
  </style>
</head>

<body>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113444990-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113444990-1');
</script>

<div id="wrapper">

     <div id="head">
          <div id="logo_user_details">
               <h1 id="logo"><a href="#"><img src="images/logo.jpg" alt=""></a></h1>

				<div id="user_details">
                    <ul id="user_details_menu">
                        <li>Welcome <strong>PRESTON ALE</strong></li>
                        <li class="user_details_menu_options">
                            <ul id="user_access">
                                <li class="first"><a href="#">My account</a></li>
								<li class="user_access_line">|</li>
                                <li class="last"><a href="login.html">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
               </div>
          </div>
     </div>

     <div id="content">

		 <div id="page">
			  <div class="inner">

				   <div class="section table_section">

						<div class="title_wrapper">
               <h2>Acme Forwarding Group</h2>
						</div>

						<div class="section_content">
							<div class="section_content_padding">
								<div class="dashboard_menu_wrapper">
								   <ul class="dashboard_menu">
                     <li><a class="back"            href="dashboard.html"><span>Back</span></a></li>
                     <li><a class="box"             href="quotepkg.html"><span>Package Details</span></a></li>
                     <li><a class="invoicenew"      href="quoterev.html"><span>Charges</span></a></li>
                     <li><a class="docs"            href="quotedoc.html"><span>Attach Documents</span></a></li>
                     <li><a class="print"           href="#"><span>Print Quote</span></a></li>
                     <li><a class="bkg"             href="#"><span>Create Booking</span></a></li>
                     <li><a class="import"          href="#"><span>Create Shipment</span></a></li>
								   </ul>
								</div>
							</div>
						</div>
				   </div>

					<div class="section table_section">

						<div class="title_wrapper">
               <h2>Shipment Quotation - Created By PRESTON ALE</h2>
						</div>

						<div class="section_content">
							  <form action="#">
								  <div class="table_wrapper">
									   <div class="table_wrapper_inner" style="padding:0;">
											<table>
												<tr>
                          <th>Quote No.</th>
                          <th><input type="text" size="15" name="id" value="20181223-001"></th>
                          <th>Quote Date</th>
                          <th><input type="text" size="15" name="id"></th>
												</tr>
                        <tr>
                          <th>Booking No.</th>
                          <th><input type="text" size="15" name="id" value=""></th>
                          <th>Shipment No.</th>
                          <th><input type="text" size="15" name="id"></th>
                        </tr>
                        <tr>
                          <th>Origin Station</th>
                          <th>
                            <select>
                              <option value="ATL">ATLANTA</option>
                              <option value="AUS">AUSTIN</option>
                              <option value="BOI">BOISE</option>
                              <option value="BOS">BOSTON</option>
                              <option value="BUF">BUFFALO</option>
                              <option value="CLT">CHARLOTTE</option>
                              <option value="CHS">CHARLESTON</option>
                              <option value="ORD">CHICAGO</option>
                              <option value="CLE">CLEVELAND</option>
                              <option value="DFW">DALLAS</option>
                              <option value="DEN">DENVER</option>
                              <option value="DET">DETROIT</option>
                              <option value="FGO">FARGO</option>
                              <option value="GRD">GRAND RAPIDS</option>
                              <option value="HOU" SELECTED>HOUSTON</option>
                              <option value="JAX">JACKSONVILLE</option>
                              <option value="LAS">LAS VEGAS</option>
                              <option value="LAX">LOS ANGELES</option>
                              <option value="MIA">MIAMI</option>
                              <option value="MIL">MILWAUKEE</option>
                              <option value="MSP">MINNEAPOLIS</option>
                              <option value="NYC">NEW YORK</option>
                              <option value="OAK">OAKLAND</option>
                              <option value="OKC">OKLAHOMA CITY</option>
                              <option value="MCO">ORLANDO</option>
                              <option value="PHL">PHILIDELPHIA</option>
                              <option value="PHX">PHOENIX</option>
                              <option value="POR">PORTLAND</option>
                              <option value="PIT">PITTSBURGH</option>
                              <option value="SLT">SALT LAKE CITY</option>
                              <option value="SAT">SAN ANTONIO</option>
                              <option value="SAN">SAN DIEGO</option>
                              <option value="SFO">SAN FRANCISCO</option>
                              <option value="SEA">SEATTLE</option>
                              <option value="TPA">TAMPA</option>
                              <option value="TOL">TOLEDO</option>
                              <option value="TUC">TUCSON</option>
                              <option value="IAD">WASHINGTON D.C.</option>
                            </select>
                          </th>
                          <th>Destination Station</th>
                          <th>
                            <select>
                              <option value="AMS">AMSTERDAM</option>
                              <option value="ANT">ANTWERP</option>
                              <option value="BER">BERLIN</option>
                              <option value="BRE">BREMEN</option>
                              <option value="ANL">BRUSSELS</option>
                              <option value="PUS">BUSAN</option>
                              <option value="DAL">DALIAN</option>
                              <option value="DXB">DUBAI</option>
                              <option value="GCM">GRAND CAYMAN</option>
                              <option value="HAM">HAMBURG</option>
                              <option value="SGN">HO CHI MINH CITY</option>
                              <option value="HKG" SELECTED>HONG KONG</option>
                              <option value="JKT">JAKARTA</option>
                              <option value="KUL">KUALA LUMPUR</option>
                              <option value="LEH">LE HAVRE</option>
                              <option value="LHR">LONDON</option>
                              <option value="CDG">PARIS</option>
                              <option value="UIO">QUITO</option>
                              <option value="RIO">RIO DE JANEIRO</option>
                              <option value="SJU">SAN JUAN</option>
                              <option value="SHA">SHANGHAI</option>
                              <option value="SIN">SINGAPORE</option>
                              <option value="TYO">TOKYO</option>
                              <option value="XMN">XIAMEN</option>
                              <option value="YOK">YOKOHOMA</option>
                            </select>
                          </th>
                        </tr>

                        <tr>
                          <th>Mode</th>
                          <th>
                            <select>
                              <option value="AIR-EXPORT">AIR EXPORT</option>
                              <option value="AIR-IMPORT">AIR IMPORT</option>
                              <option value="OCN-EXPORT">OCEAN EXPORT</option>
                              <option value="OCN-IMPORT">OCEAN IMPORT</option>
                              <option value="TRUCK">TRUCK</option>
                            </select>
                          </th>
                          <th>Service</th>
                          <th>
                            <select>
                              <option value="PP">PORT TO PORT</option>
                              <option value="PD">PORT TO DOOR</option>
                              <option value="DP">DOOR TO PORT</option>
                              <option value="DD">DOOR TO DOOR</option>
                            </select>
                          </th>
                        </tr>

                        <tr>
                          <th>Requested Ship Date</th>
                          <!--th colspan=3><input type="text" size="10" id="calendar" name="calendar">&nbsp;<img src="images/cal.gif" onclick="NewCal('calendar','mmddyyyy',false,24);"></th-->
                          <th colspan=3><div class="calendar-wrapper"><input type="text" name="calendar" id="calendar" size="10"></div></th>
                        </tr>



                        <tr>
                          <th>Transit Days</th>
                          <th><input type="text" size="05" name="id"></th>
                          <th>Frequency</th>
                          <th><input type="text" size="45" name="id"></th>
                        </tr>

                        <tr>
                          <th>Bill To ID</th>
                          <th><input type="text" size="15" name="id"></th>
                          <th>Bill To</th>
                          <th><input type="text" size="45" name="id"></th>
                        </tr>

                        <tr>
                          <th colspan=2 style="text-align:center;font-size:20px;background-color:#98AFC7;"><b>PICK UP FROM</b></th>
                          <th colspan=2 style="text-align:center;font-size:20px;background-color:#488AC7;"><b>DELIVERY TO</b></th>
                        </tr>

                        <tr>
                           <th align="left">Cargo Pick Up ID</th>
                           <th align="left"><input size="15" name="id" type="text" /></th>
                           <th align="left">Cargo Delivery To ID</th>
                           <th align="left"><input size="15" name="id" type="text" /></th>
                        </tr>
                        <tr>
                           <th align="left">Pick Up Company Name</th>
                           <th align="left"><input size="45" name="id" type="text" /></th>
                           <th align="left">Delivery To Company Name</th>
                           <th align="left"><input size="45" name="id" type="text" /></th>
                        </tr>
                        <tr>
                           <th align="left">Address</th>
                           <th align="left"><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /></th>
                           <th align="left">Address</th>
                           <th align="left"><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /></th>
                        </tr>
                        <tr>
                           <th align="left">City, State, Zip</th>
                           <th align="left"><input size="45" name="id" type="text" />, 
                            <select>
                              <option value=""></option>
                              <option value="TX">TEXAS</option>
                            </select>
                           &nbsp;<input size="10" name="id" type="text" /></th>
                           <th align="left">City, State, Zip</th>
                           <th align="left"><input size="45" name="id" type="text" />, 
                            <select>
                              <option value=""></option>
                              <option value="TX">TEXAS</option>
                            </select>
                           &nbsp;<input size="10" name="id" type="text" /></th>
                        </tr>
                        <tr>
                          <th>Country</th>
                          <th>
                            <select>
                              <option value="">-- SELECT COUNTRY --</option>
                            </select>
                          </th>
                          <th>Country</th>
                          <th>
                            <select>
                              <option value="">-- SELECT COUNTRY --</option>
                            </select>
                          </th>
                        </tr>
                        <tr>
                           <th align="left">Reference No.</th>
                           <th align="left"><input size="30" name="id" type="text" /></th>
                           <th align="left">Reference No.</th>
                           <th align="left"><input size="30" name="id" type="text" /></th>
                        </tr>

                        <tr>
                          <th colspan=2 style="text-align:center;font-size:20px;background-color:#786D5F;"><b>SHIPPER</b></th>
                          <th colspan=2 style="text-align:center;font-size:20px;background-color:#ADA96E;"><b>CONSIGNEE</b></th>
                        </tr>

                        <tr>
                           <th align="left">Shipper ID</th>
                           <th align="left"><input size="15" name="id" type="text" /></th>
                           <th align="left">Consignee ID</th>
                           <th align="left"><input size="15" name="id" type="text" /></th>
                        </tr>
                        <tr>
                           <th align="left">Shipper</th>
                           <th align="left"><input size="45" name="id" type="text" /></th>
                           <th align="left">Consignee</th>
                           <th align="left"><input size="45" name="id" type="text" /></th>
                        </tr>
                        <tr>
                           <th align="left">Address</th>
                           <th align="left"><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /></th>
                           <th align="left">Address</th>
                           <th align="left"><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /><br><input size="45" name="id" type="text" /></th>
                        </tr>
                        <tr>
                           <th align="left">City, State, Zip</th>
                           <th align="left"><input size="45" name="id" type="text" />, 
                            <select>
                              <option value=""></option>
                              <option value="TX">TEXAS</option>
                            </select>
                           &nbsp;<input size="10" name="id" type="text" /></th>
                           <th align="left">City, State, Zip</th>
                           <th align="left"><input size="45" name="id" type="text" />, 
                            <select>
                              <option value=""></option>
                              <option value="TX">TEXAS</option>
                            </select>
                           &nbsp;<input size="10" name="id" type="text" /></th>
                        </tr>
                        <tr>
                          <th>Country</th>
                          <th>
                            <select>
                              <option value="">-- SELECT COUNTRY --</option>
                            </select>
                          </th>
                          <th>Country</th>
                          <th>
                            <select>
                              <option value="">-- SELECT COUNTRY --</option>
                            </select>
                          </th>
                        </tr>
                        <tr>
                           <th align="left">Reference No.</th>
                           <th align="left"><input size="30" name="id" type="text" /></th>
                           <th align="left">Reference No.</th>
                           <th align="left"><input size="30" name="id" type="text" /></th>
                        </tr>

                        <tr>
                          <th colspan=4 style="text-align:center;font-size:20px;background-color:#488AC7;"><b>ROUTING</b></th>
                        </tr>

                        <tr>
                          <th>Place of Receipt</th>
                          <th><input type="text" size="5" name="id">&nbsp;<input type="text" size="45" name="id"></th>
                          <th>Port of Loading</th>
                          <th><input type="text" size="5" name="id">&nbsp;<input type="text" size="45" name="id"></th>
                        </tr>
                        <tr>
                          <th>Port of Discharge</th>
                          <th><input type="text" size="5" name="id">&nbsp;<input type="text" size="45" name="id"></th>
                          <th>Place of Delivery</th>
                          <th><input type="text" size="5" name="id">&nbsp;<input type="text" size="45" name="id"></th>
                        </tr>

                        <tr>
                          <th colspan=4 style="text-align:center;font-size:20px;background-color:#C24641;"><b>QUOTE TERMS & CONDITIONS</b></th>
                        </tr>
                        <tr>
                          <th colspan=4 style="text-align:center;font-size:20px;background-color:#C24641;"><textarea rows="5" cols="250"></textarea></th>
                        </tr>
                        <tr>
                          <th colspan=4 style="text-align:center;font-size:20px;background-color:#81D8D0;"><b>QUOTE INTERNAL NOTES</b></th>
                        </tr>
                        <tr>
                          <th colspan=4 style="text-align:center;font-size:20px;background-color:#81D8D0;"><textarea rows="5" cols="250"></textarea></th>
                        </tr>





											</table>
									   </div>
								  </div>
							  </form>

						</div>
					</div>

			  </div>
		 </div>

     </div>


</div>

<div id="footer" style="">
     <div id="footer_inner">
          <dl class="copy">
              <dt><strong>CDM Web Freight 2019</strong> <em>Build 20180211-1203</em></dt>
              <dd>&copy; 1988-2019 CDM Software Solutions, Inc. &bull; All Rights Reserved &bull; (281) 298-8880</dd>
          </dl>
     </div>
</div>

<script>
  $( function() {
    $( "#calendar" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "m/d/yy",
      showOn: "both",
      buttonImage: "images/cal.gif",
      buttonImageOnly: false,
      buttonText: "Ship Date",
      showAnim: "blind"
    });
  } );
  </script>

</body>
</html>
