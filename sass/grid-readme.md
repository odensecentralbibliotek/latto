#Grid classes
The grid classes are specified by .grid- + a number (column count) + dash (-) + left/center/center-left/center-right/right which indicates the position.

##Example of grid 3-10-3

#####Markup
    
    <div class="grid-10-center">10 columns</div>
    <div class="grid-3-left">3 columns</div>
    <div class="grid-3-right">3 columns</div>

#####Result

<table>
	<tr>
		<td style="width: 15%;">.grid-3-left</td>
		<td style="width: 60%;">.grid-10-center</td>
		<td style="width: 15%;">.grid-3-right</td>
	</tr>
</table>

##Example of grid 13-3

#####Markup
    
    <div class="grid-13-left">13 columns</div>
    <div class="grid-3-right">3 columns</div>

#####Result

<table>
	<tr>
		<td style="width: 75%;">.grid-13-left</td>
		<td style="width: 15%;">.grid-3-right</td>
	</tr>
</table>

#####All available grids

<table>
	<tr>
		<td style="text-align: center; width: 12%;"><b>Zen grid values</b></td>
		<td colspan="7" style="text-align: center;"><b>Column count / class</b></td>
	</tr>
	<tr>
		<td></td>
		<td style="border-left: 1px solid #e1e1e1; text-align: center; width: 15%;">3</td>
		<td style="text-align: center;">4</td>
		<td style="text-align: center;">8</td>
		<td style="text-align: center;">10</td>
		<td style="text-align: center;">12</td>
		<td style="text-align: center;">13</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #e1e1e1; text-align: center;">x, 1</td>
		<td style="text-align: center;">grid-3-left</td>
		<td style="text-align: center;">grid-4-left</td>
		<td style="text-align: center;">grid-8-left</td>
		<td style="text-align: center;">grid-10-left</td>
		<td style="text-align: center;">grid-12-left</td>
		<td style="text-align: center;">grid-13-left</td>	</tr>
	<tr>
		<td style="border-left: 1px solid #e1e1e1; text-align: center;">x, 1, right</td>
		<td style="text-align: center;">grid-3-right</td>
		<td style="text-align: center;">grid-4-right</td>
		<td style="text-align: center;">grid-8-right</td>
		<td style="text-align: center;">grid-10-right</td>
		<td style="text-align: center;">grid-12-right</td>
		<td style="text-align: center;">grid-13-right</td>	</tr>		
	<tr>
		<td style="border-left: 1px solid #e1e1e1; text-align: center;">x, 4</td>
		<td style="text-align: center;">grid-3-center-left</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">grid-10-center</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #e1e1e1; text-align: center;">x, 5</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">grid-4-center-left</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #e1e1e1; text-align: center;">x, 7</td>
		<td style="text-align: center;">grid-3-center-right</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #e1e1e1; text-align: center;">x, 9</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">grid-4-center-right</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td></td>
	</tr>
</table>
