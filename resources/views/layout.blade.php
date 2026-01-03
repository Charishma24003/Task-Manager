<!DOCTYPE html>
<html>

<head>
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
        }

        a.button {
            background: #3498db;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #ecf0f1;
        }

        .low {
            color: #27ae60;
            font-weight: bold;
        }

        .medium {
            color: #e67e22;
            font-weight: bold;
        }

        .high {
            color: #e74c3c;
            font-weight: bold;
        }

        .pending {
            color: #f1c40f;
            padding: 5px 8px;
            border-radius: 4px;
            font-weight: bold;

        }

        .completed {
            color: #2ecc71;
            padding: 5px 8px;
            border-radius: 4px;
            font-weight: bold;
        }

        button {
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #27ae60;
            /* width: 80%; */
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-delete {
            font-size: 16px;
            background: #e74c3c;
            color: white;
            border-radius: 4px;
        }

        .btn-complete {
            background: #27ae60;
            color: white;
        }

        .btn-edit {
            font-size: 16px;
            background: #2980b9;
            color: white;
            padding: 6px 10px;
            border-radius: 4px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }

        .btnChanges {
            display: flex;

            gap: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>