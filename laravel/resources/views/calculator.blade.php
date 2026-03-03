@extends('layouts.app')

@section('content')
    <div class="card">
        <h1>Calculator</h1>
        <p>Simple arithmetic calculator.</p>
        <div style="display: flex; flex-direction: column; width: 300px;">
            <label for="num1">First Number:</label>
            <input type="number" id="num1" placeholder="Enter first number">

            <label for="operation">Operation:</label>
            <select id="operation"
                style="padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; width: 220px;">
                <option value="+">Addition (+)</option>
                <option value="-">Subtraction (-)</option>
                <option value="*">Multiplication (*)</option>
                <option value="/">Division (/)</option>
            </select>

            <label for="num2">Second Number:</label>
            <input type="number" id="num2" placeholder="Enter second number">

            <button onclick="calculate()">Calculate</button>
        </div>

        <div id="result-box" style="margin-top: 30px; display: none;">
            <h3>Result: <span id="result" style="color: var(--primary);"></span></h3>
        </div>
    </div>

    <script>
        function calculate() {
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            const operation = document.getElementById('operation').value;

            if (isNaN(num1) || isNaN(num2)) {
                alert('Please enter valid numbers!');
                return;
            }

            let result;
            switch (operation) {
                case '+':
                    result = num1 + num2;
                    break;
                case '-':
                    result = num1 - num2;
                    break;
                case '*':
                    result = num1 * num2;
                    break;
                case '/':
                    if (num2 === 0) {
                        alert('Cannot divide by zero!');
                        return;
                    }
                    result = num1 / num2;
                    break;
                default:
                    result = 0;
            }

            document.getElementById('result').innerText = result;
            document.getElementById('result-box').style.display = 'block';
        }
    </script>
@endsection
