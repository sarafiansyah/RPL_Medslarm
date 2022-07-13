<div class="row">
	<div class="col-md-12">
		<div class="content w-100 shadow">
			<div class="calendar-container">
				<div class="calendar">
					<div class="year-header">
						<span class="left-button fa fa-chevron-left" id="prev"> </span>
						<span class="year mx-auto" id="label" style="margin-top: -20px; margin-left: -200px;"></span>
						<span class="right-button fa fa-chevron-right" id="next"> </span>
					</div>
					<table class="months-table w-100">
						<tbody>
							<tr class="months-row">
								<td class="month">Jan</td>
								<td class="month">Feb</td>
								<td class="month">Mar</td>
								<td class="month">Apr</td>
								<td class="month">May</td>
								<td class="month">Jun</td>
								<td class="month">Jul</td>
								<td class="month">Aug</td>
								<td class="month">Sep</td>
								<td class="month">Oct</td>
								<td class="month">Nov</td>
								<td class="month">Dec</td>
							</tr>
						</tbody>
					</table>

					<table class="days-table w-100">
						<td class="day">Sun</td>
						<td class="day">Mon</td>
						<td class="day">Tue</td>
						<td class="day">Wed</td>
						<td class="day">Thu</td>
						<td class="day">Fri</td>
						<td class="day">Sat</td>
					</table>
					<div class="frame">
						<table class="dates-table w-100">
							<tbody class="tbody">
							</tbody>
						</table>
					</div>
					<button class="button" id="add-button"><i class="fa-solid fa-plus"></i> Add Reminder</button>
				</div>
			</div>
			<div class="events-container">
			</div>
			<div class="dialog" id="dialog">
				<h2 class="dialog-header">Add New Reminder </h2>
				<form class="form" id="form" style="margin-top: -100px;">
					<div class="form-container" align="center">
						<label class="form-label" id="valueFromMyButton" for="name">Nama Obat</label>
						<input class="input" type="text" id="name" maxlength="36" placeholder="Paracetamol">
						<label class="form-label" id="valueFromMyButton" for="count">Jumlah</label>
						<input class="input" type="number" id="count" min="0" max="1000000" maxlength="7" placeholder="Jumlah takaran obat">
						<label class="form-label" id="valueFromMyButton" for="time">Dosis</label>
						<input class="input" type="number" id="reps" maxlength="36" placeholder="Berapa kali sehari?">
						<label class="form-label" id="valueFromMyButton" for="time">Waktu</label>
						<input class="input" type="time" id="time" maxlength="36">
						<div class="alarm-inputs">
							<input type="number" name="hour" placeholder="Enter hours" min="0" max="12" required />
							<input type="number" name="min" min="0" max="60" placeholder="Enter minutes" required />
							<input type="number" name="sec" min="0" max="60" placeholder="Enter seconds" required />
							<select name="zone" required>
								<option value="" selected disabled>Zone</option>
								<option value="AM">AM</option>
								<option value="PM">PM</option>
							</select>
						</div>
						<button>Submit</button><br>
						<input type="button" value="Cancel" class="button" id="cancel-button">
						<input type="button" value="OK" class="button button-white" id="ok-button">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>