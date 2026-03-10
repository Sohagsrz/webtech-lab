<html>

<head>
    <title> Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
        <div class="headertxt"> Calculator</div>
    </div>

    <div class="calculatorbox">

        <div class="display">
            <input type="text" id="screen" readonly>
        </div>

        <div class="buttons">
            <span class="btn" onclick="appendValue('0')">0</span>
            <span class="btn" onclick="appendValue('1')">1</span>
            <span class="btn" onclick="appendValue('2')">2</span>
            <span class="btn" onclick="appendValue('3')">3</span>

            <span class="btn" onclick="appendValue('4')">4</span>
            <span class="btn" onclick="appendValue('5')">5</span>
            <span class="btn" onclick="appendValue('6')">6</span>
            <span class="btn" onclick="appendValue('7')">7</span>

            <span class="btn" onclick="appendValue('8')">8</span>
            <span class="btn" onclick="appendValue('9')">9</span>
            <span class="btn" onclick="appendValue('.')">.</span>

            <span class="btn operator" onclick="appendValue('+')">+</span>
            <span class="btn operator" onclick="appendValue('-')">-</span>
            <span class="btn operator" onclick="appendValue('*')">*</span>
            <span class="btn operator" onclick="appendValue('/')">/</span>

            <span class="btn equal" onclick="calculate()">=</span>
            <span class="btn" onclick="clearScreen()">C</span>
        </div>

    </div>

    <div class="footer">
        <div class="footertxt">
            Designed By Sohag Islam
        </div>
    </div>

    <script>
        var screen = document.getElementById('screen');

        function appendValue(value) {
            screen.value = screen.value + value;
        }

        function clearScreen() {
            screen.value = '';
        }

        function calculate() {
            var expression = screen.value;
            console.log(expression);

            if (expression == '') {
                screen.value = 'Error';
                return;
            }

            var result = evaluateExpression(expression);
            screen.value = result;
        }

        function evaluateExpression(expr) {
            var num1 = '';
            var num2 = '';
            var operator = '';
            var foundOperator = false;

            for (var i = 0; i < expr.length; i++) {
                var char = expr[i];

                switch (char) {
                    case '+':
                    case '-':
                    case '*':
                    case '/':
                        if (foundOperator == false) {
                            operator = char;
                            foundOperator = true;
                        } else {
                            num2 = num2 + char;
                        }
                        break;
                    default:
                        console.log(char);
                        if (foundOperator == false) {
                            num1 = num1 + char;
                        } else {
                            num2 = num2 + char;
                        }
                        break;
                }
            }

            var n1 = parseFloat(num1);
            var n2 = parseFloat(num2);
            var result = 0;

            if (isNaN(n1) || isNaN(n2)) {
                return 'Error';
            }

            switch (operator) {
                case '+':
                    result = n1 + n2;
                    break;
                case '-':
                    result = n1 - n2;
                    break;
                case '*':
                    result = n1 * n2;
                    break;
                case '/':
                    if (n2 == 0) {
                        return 'Error';
                    }
                    result = n1 / n2;
                    break;
                default:
                    return 'Error';
            }

            return result;
        }
    </script>

</body>

</html>