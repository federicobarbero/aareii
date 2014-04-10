<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Agenda</title>
		<meta 	name="description"	content="This is page-header (.page-header &gt; h1)" 						/>
		<meta 	name="viewport" 	content="width=device-width, initial-scale=1.0" 							/>

		<!--basic styles-->

		<link 	rel="stylesheet"	href="../../lib/bootstrap/css/bootstrap.min.css" 				 			/>
		<link 	rel="stylesheet"	href="../../lib/bootstrap/css/bootstrap-responsive.min.css" 				/>
		<link 	rel="stylesheet" 	href="../../features/themes/font-awesome/css/font-awesome.min.css" 			/>
		<link 	rel="stylesheet"	href="../../css/empresaStyles.css"  										/> 
		<link 	rel="stylesheet" 	href="../../css/agendaStyles.css"											/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"> 				</script>
		<script src="../../js/completeAgenda.js" 	type="text/javascript"> 							</script>
	</head>

	<body>
    	<div class="wrapperMedium">
    		<div id="header">
    			<img class="logo" src="images/fiat-web.png" width="25%">
    			<img class="rightSide" id="aareiiLogo" src="../../features/images/AAREII-logo.png" width="5.5%">
    		</div>

    		<?php include '../sideMenu.html'; ?>

    		<div id="content">
    			<div id="main-content" class="clearfix">
	    				<table cellspacing="1" id="tableCalendar">
							<thead>
								<tr>
									<th>Mon</th><th>Tue</th><th>Wed</th>
									<th>Thu</th><th>Fri</th><th>Sat</th>
									<th>Sun</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="padding"></td>
									<td class="padding"></td>
									<td> 1</td>
									<td> 2</td>
									<td> 3</td>
									<td> 4</td>
									<td> 5</td>
								</tr>
								<tr>
									<td> 6</td>
									<td> 7</td>
									<td> 8</td>
									<td class="today"> 9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
								</tr>
								<tr>
									<td class="date_has_event">
										13
										<div class="events">
											<ul>
												<li>
													<span class="title">Event 1</span>
													<span class="desc">Lorem ipsum dolor sit amet, consectetu adipisicing elit.</span>
												</li>
												<li>
													<span class="title">Event 2</span>
													<span class="desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
												</li>
											</ul>
										</div>
									</td>
									<td>14</td>
									<td>15</td>
									<td>16</td>
									<td>17</td>
									<td>18</td>
									<td>19</td>
								</tr>
								<tr>
									<td>20</td>
									<td>21</td>
									<td>22</td>
									<td>23</td>
									<td>24</td>
									<td>25</td>
									<td>26</td>
								</tr>	
								<tr>
									<td>27</td>
									<td>28</td>
									<td>29</td>
									<td>30</td>
									<td class="padding"></td>
									<td class="padding"></td>
									<td class="padding"></td>
								</tr>
							</tbody>
						</table>
    			</div>
    		</div>

    		<?php include '../footer.html'; ?>

    	</div>
	</body>
</html>
