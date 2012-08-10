	function ClearInput(x)
			{
				// Only Clear box if it has <no subject>
				inputstring = document.getElementById(x).value;
				if (inputstring=='Enter ID')
				{
					document.getElementById(x).value='';
				}
			}

			function ValidateInput(x)
			{
				// If the box is empty put back <no subject>
				inputstring = document.getElementById(x).value;
				if (inputstring=='')
				{
					document.getElementById(x).value='Enter ID' || 'Enter Operator Id' || 'Enter Product Id';
				}
			}
