

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="process.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Skills</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="skill1" placeholder="Skill 1" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="skill2" placeholder="Skill 2" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="skill3" placeholder="Skill 3" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="skill4" placeholder="Skill 4" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="skill5" placeholder="Skill 5" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="skill6" placeholder="Skill 6" />
                        </div>

                        <div class="form-group">
                            <button type="submit" name="save_skills">Save
                            <!-- <a href="education_form.php">Save and Continue</a> -->
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>