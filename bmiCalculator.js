window.onload = () => {
	// grab the id for the needed elements
	// input elements
	const weightInput = document.getElementById("weight");
	const inchesInput = document.getElementById("inches");
	const feetInput = document.getElementById("feet");
	// form element
	const bmiForm = document.getElementById("bmiForm");
	// label element (for showing the user the result)
	const calculatedBMILabel = document.getElementById("calculatedBMI");

	function caluculateBMI({ weight, height }) {
		return (weight / Math.pow(height, 2)) * 703;
	}

	bmiForm.onsubmit = (e) => {
		e.preventDefault();

		data = {
			weight: Number(weightInput.value),
			height: Number(inchesInput.value) + Number(feetInput.value) * 12
		};

		calculatedBMILabel.innerText = caluculateBMI(data).toFixed(2);
	};
};
