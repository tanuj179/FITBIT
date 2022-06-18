<script type="text/javascript">
    function BMI() {
        var h = document.getElementById('h').value;
        var w = document.getElementById('w').value;
        var bmi = w / (h / 100 * h / 100);
        var bmio = (bmi.toFixed(2));

        document.getElementById("result").innerHTML = "Your BMI is " + bmio;

        if (bmio < 18.6) result.innerHTML =
        `Under Weight : <span>${bmi}</span>`;

    else if (bmio >= 18.6 && bmio < 24.9) 
        result.innerHTML = 
            `Normal : <span>${bmio}</span>`;

    else result.innerHTML =
        `Over Weight : <span>${bmio}</span>`;

       
    }
</script>
