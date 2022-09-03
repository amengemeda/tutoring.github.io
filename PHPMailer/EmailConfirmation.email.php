<!DOCTYPE html>
          <html>
              <head>
                  <style>
                        .container {
                        width: 80%;
                        margin: 1rem auto 0;
                        /* text-align: center; */
                        }
                      .container .tag {
                            margin: 0;
                            text-align: left;
                            margin-left: 1%;
                            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                            font-style: oblique;
                            color: rgb(4, 170, 4);
                        }

                        .container .para1 {
                            margin: 25px 0;
                            padding: 0 10px;
                            text-align: justify;
                            border-left: 5px solid #c73d06;
                        }
                                            
                        table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 80%;
                        }

                        td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                        }

                        tr:nth-child(even) {
                        background-color: #dddddd;
                        }

                  </style>
              </head>
          <body>
            <div class="container">
            <div class="tag"><strong>Dear $name,</strong></div>
            <div class="para1">This is to inform you that Hostel Search has received a new sign up for the testing of the system. the role is $testingRole.</div>
            <br>
            <h2>Update Table</h2>

            <table>
            <tr>
                <th>Role</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Hostel Owner</td>
                <td>$totalHO</td>
            </tr>
            <tr>
            <td>Hostel Searcher</td>
                <td>$totalHS</td>
            </tr>
            <td></td>
                <td>$total</td>
            </tr>
            </table>

            <br>
            <div>Regards,</div>
            <br>
            <div>SALAS helper</div>
            <div>HS team</div>
            </div>
          </body> 
          </html>