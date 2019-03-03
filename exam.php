<?php include 'includes/dataBaseHandler.inc.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="title" content="Students Assistant UA" />
    <meta name="description"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work." />
    <meta name="keywords"
        content="test practice, exam preparations, examinations, student assistant, students assistant , medical university, students assistant app, student assistant app, student assistant application, a student research assistant, student assistant benefits, student assistant exam, student assistant evaluation, student assistant high school, student assistant library, student assistant research, student assistant training, student assistant teacher, practice test for postal exams 473 free, practice test for nursing exams, medical assistant practice test for written exams, ukrainian medical schools ranking, best ukrainian medical school,  ukraine, education, learn, classes, exam preparation, students, assistant, studentsassistant, ternopil, kiev, test-practice, international students, medical university, study in ukraine, study smart, mcq practice, directions to school buildings, study notes, study tips, educational, tdmu, tdmuexams, tdmu exam practice" />
    <meta name="robots" content="index, follow" />
    <title>Students Assistant UA</title>

    <?php
    require 'metaTags.php';
    ?>

    <!-- Open Graph protocol & Sharing meta data -->

    <meta property="og:url" content="https://www.studentsassistantua.com/" />
    <meta property="og:title" content="Homepage / Landing Page | StudentsAssistantUa">
    <meta property="og:description"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work.">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.studentsassistantua.com/img/mainHero.jpg " />
    <meta property="og:image:url" content="https://www.studentsassistantua.com/img/mainHero.jpg " />
    <meta property="og:image:secure_url" content="https://www.studentsassistantua.com/img/mainHero.jpg " />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@studentsassistantua" />
    <meta name="twitter:site:id" content="@studentsassistantua" />
    <meta name="twitter:creator" content="@studentsassistantua" />
    <meta name="twitter:creator:id" content="@studentsassistantua " />
    <meta name="twitter:url" content="https://www.studentsassistantua.com" />
    <meta name="twitter:title"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work | StudentsAssistantUa" />
    <meta name="twitter:description"
        content="Assist students with preparation for classes, practical skills, examinations and educational Work." />
    <meta name="twitter:image" content="https://www.studentsassistantua.com/img/mainHero.jpg " />

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/exam.css" type="text/css">

    <!-- Webfonts Css -->

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
</head>

<body>

    <div class="wrapper">

        <?php
        require 'header.php';
        ?>
        <main id="question">

            <div class="landing">
                <div>
                    <h2>Medical Biology</h2>
                    <p>ID_7263</p>

                </div>
            </div>


            <div class="col-md-10 col-lg-10">
                <div class="container-question slide">
                    <?php
                    $count = 0;
                    $sql = 'SELECT * FROM ID_7263';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <div class="result_question" id="<?php echo $row['id']; ?>">
                        <div class="question">
                            <p>
                                <?php echo $row['question']; ?>
                            </p>
                        </div>
                        <div class="option">
                            <div class="radio margin-xs">
                                <label><input type="radio" value="1" name="<?php echo $count; ?>" class="radiobtn" />
                                    <?php echo $row['option1']; ?></label>
                            </div>
                            <div class="radio  margin-xs">
                                <label><input type="radio" value="2" name="<?php echo $count; ?>" class="radiobtn" />
                                    <?php echo $row['option2']; ?></label>
                            </div>
                            <div class="radio  margin-xs">
                                <label><input type="radio" value="3" name="<?php echo $count; ?>" class="radiobtn" />
                                    <?php echo $row['option3']; ?></label>
                            </div>
                            <div class="radio  margin-xs">
                                <label><input type="radio" value="4" name="<?php echo $count; ?>" class="radiobtn" />
                                    <?php echo $row['option4']; ?></label>
                            </div>
                            <div class="radio  margin-xs">
                                <label><input type="radio" value="5" name="<?php echo $count; ?>" class="radiobtn" />
                                    <?php echo $row['option5']; ?></label>
                            </div>
                        </div>

                    </div>
                    <?php
                    ++$count;
                    }
                ?>

                    <div class="control-btn">
                        <button class="btn btn-small prev">Previous</button>
                        <button class="btn btn-small next">Next</button>
                        <button class="save btn btn-small check ">Check</button>
                        <button class="bookmark btn btn-small review">Review</button>
                    </div>

                    <p class="invalid_qu"></p>
                </div><br>
                <div class="control-btn margin-xs">
                    <button class="btn btn-small submitexam button" href="#">Submit</button>
                </div>


                <div class="text-center">
                    <div class="sec-line"></div>
                </div><br>
            </div>

            <div class="row">
                <div class="col-md-2 col-lg-2">
                    <div id="demo">
                        <div id="hour"></div>
                        <div id="min"></div>
                        <div id="sec"></div>
                    </div>
                    <div class="container-btn">
                        <?php
                        $sql = 'SELECT * FROM ID_7263';
                        $result = mysqli_query($conn, $sql);
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <button class="question-nav-btn"><a class="question-btn hero-back"
                                data-id="<?php echo $row['id']; ?>">
                                <?php echo $row['id']; ?></a></button>
                        <?php
                        ++$count;
                        }
                    ?>
                    </div>
                    <div class="option-btn">
                        <div class="option-all">
                            <div class="square checked"></div>
                            <span>Checked</span>
                        </div>
                        <div class="option-all">
                            <div class="square bookmarked"></div>
                            <span>Review</span>
                        </div>


                    </div>
                </div>

            </div>




        </main>

        <?php
        require 'footer.php';
        ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mainExam.js"></script>
    <script src="js/main.js"></script>
</body>

</html>