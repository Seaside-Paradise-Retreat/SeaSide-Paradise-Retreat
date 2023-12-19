<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .tableOfUser {
            width: 80%;
            border-collapse: collapse;
        }
        .tableOfUser th, .tableOfUser td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: center;
        }
        #createUser{
            display: flex;
            width: 154px;
            height: 51px;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 20px;
            font-size: 25px;
        }
 
        
    </style>
</head>
<body>
    <div class="User">
 
        <h1 class="title" style="text-align: center;">USER</h1>
        <button type="button" id="createUser">Create +</button>
        <br>
        <table class="tableOfUser">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Avatar</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add table rows with user data here -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Avatar URL</td>
                    <td>123-456-7890</td>
                    <td>john@example.com</td>
                    <td>25</td>
                    <td>Male</td>
                    <td>
                    <button type="button" id="button_edit"><i class="fas fa-cog"></i></button>
                        <button type="button" id="button_delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
