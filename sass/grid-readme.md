#Grid classes
The grid classes are specified by .grid- + a number (column count) + dash (-) + left/center/center-left/center-right/right which indicates the position.

###Example of grid 3-10-3

#####Markup
    
    <div class="grid-10-center">10 columns</div>
    <div class="grid-3-left">3 columns</div>
    <div class="grid-3-right">3 columns</div>

#####Result

<table>
	<tr>
		<td style="width: 18%;">grid-3-left</td>
		<td style="width: 54%;">grid-10-center</td>
		<td style="width: 18%;">grid-3-right</td>
	</tr>
</table>

###Example of grid 13-3

#####Markup
    
    <div class="grid-13-left">13 columns</div>
    <div class="grid-3-right">3 columns</div>

#####Result

<table>
	<tr>
		<td style="width: 72%;">grid-13-left</td>
		<td style="width: 18%;">grid-3-right</td>
	</tr>
</table>

#####Column classes overview

<table>
	<tr>
		<td style="text-align: center; width: 12%;"><b>Zen grid values</b></td>
		<td colspan="7" style="text-align: center;"><b>Column count / class</b></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center; width: 15%;">3</td>
		<td style="text-align: center;">4</td>
		<td style="text-align: center;">8</td>
		<td style="text-align: center;">10</td>
		<td style="text-align: center;">12</td>
		<td style="text-align: center;">13</td>
	</tr>
	<tr>
		<td style="text-align: center;">x, 1</td>
		<td style="text-align: center;">grid-3-left</td>
		<td style="text-align: center;">grid-4-left</td>
		<td style="text-align: center;">grid-8-left</td>
		<td style="text-align: center;">grid-10-left</td>
		<td style="text-align: center;">grid-12-left</td>
		<td style="text-align: center;">grid-13-left</td>	</tr>
	<tr>
		<td style="text-align: center;">x, 1, right</td>
		<td style="text-align: center;">grid-3-right</td>
		<td style="text-align: center;">grid-4-right</td>
		<td style="text-align: center;">grid-8-right</td>
		<td style="text-align: center;">grid-10-right</td>
		<td style="text-align: center;">grid-12-right</td>
		<td style="text-align: center;">grid-13-right</td>	</tr>		
	<tr>
		<td style="text-align: center;">x, 4</td>
		<td style="text-align: center;">grid-3-center-left</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">grid-10-center</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
	</tr>
	<tr>
		<td style="text-align: center;">x, 5</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">grid-4-center-left</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td></td>
	</tr>
	<tr>
		<td style="text-align: center;">x, 4, right</td>
		<td style="text-align: center;">grid-3-center-right</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td></td>
	</tr>
	<tr>
		<td style="text-align: center;">x, 9</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">grid-4-center-right</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td></td>
	</tr>
</table>

###Other grid class

<table>
	<tr>
		<td><b>Class</b></td>
		<td><b>Description</b></td>
	</tr>
	<tr>
		<td>grid-full</td>
		<td>
			Add to column to make it span the whole grid.
		</td>
	</tr>
	<tr>
		<td>grid-clear-both</td>
		<td>Add clear both to the column.</td>
	</tr>		
	<tr>
		<td>grid-clear-left</td>
		<td>Add clear left to the column.</td>
	</tr>		
	<tr>
		<td>grid-clear-right</td>
		<td>Add clear right to the column.</td>
	</tr>
	<tr>
		<td>grid-stack</td>
		<td>Add this class to make the column stack when viewing devices with a small viewport.</td>
	</tr>	
</table>

###All grid examples

<table>
	<tr>
		<td colspan="3" style="background-color: #f1f1f1; text-align: center;"><b>Grid 3-10-3</b></td>
	</tr>
	<tr>
		<td style="width: 18%;">grid-3-left</td>
		<td style="width: 54%;">grid-10-center</td>
		<td style="width: 18%;">grid-3-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="3" style="background-color: #f1f1f1; text-align: center;"><b>Grid 3-3-10</b></td>
	</tr>
	<tr>
		<td style="width: 18%;">grid-3-right</td>
		<td style="width: 18%;">grid-3-center-left</td>
		<td style="width: 54%;">grid-10-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="3" style="background-color: #f1f1f1; text-align: center;"><b>Grid 10-3-3</b></td>
	</tr>
	<tr>
		<td style="width: 54%;">grid-10-left</td>
		<td style="width: 18%;">grid-3-center-right</td>
		<td style="width: 18%;">grid-3-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="3" style="background-color: #f1f1f1; text-align: center;"><b>Grid 4-4-8</b></td>
	</tr>
	<tr>
		<td style="width: 22%;">grid-4-left</td>
		<td style="width: 23%;">grid-4-center-left</td>
		<td style="width: 45%;">grid-8-left</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="3" style="background-color: #f1f1f1; text-align: center;"><b>Grid 8-4-4</b></td>
	</tr>
	<tr>
		<td style="width: 45%;">grid-8-left</td>
		<td style="width: 22%;">grid-4-center-right</td>
		<td style="width: 23%;">grid-4-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="2" style="background-color: #f1f1f1; text-align: center;"><b>Grid 8-8</b></td>
	</tr>
	<tr>
		<td style="width: 45%;">grid-8-left</td>
		<td style="width: 45%;">grid-8-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="2" style="background-color: #f1f1f1; text-align: center;"><b>Grid 12-4</b></td>
	</tr>
	<tr>
		<td style="width: 66%;">grid-12-left</td>
		<td style="width: 23%;">grid-4-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="2" style="background-color: #f1f1f1; text-align: center;"><b>Grid 4-12</b></td>
	</tr>
	<tr>
		<td style="width: 22%;">grid-4-left</td>
		<td style="width: 67%;">grid-12-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="2" style="background-color: #f1f1f1; text-align: center;"><b>Grid 13-3</b></td>
	</tr>
	<tr>
		<td style="width: 72%;">grid-13-left</td>
		<td style="width: 18%;">grid-3-right</td>
	</tr>
</table>

<table>
	<tr>
		<td colspan="2" style="background-color: #f1f1f1; text-align: center;"><b>Grid 3-13</b></td>
	</tr>
	<tr>
		<td style="width: 18%;">grid-3-right</td>
		<td style="width: 72%;">grid-13-left</td>
	</tr>
</table>