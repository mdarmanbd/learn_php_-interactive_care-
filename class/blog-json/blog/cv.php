
<?php 
  $json_data =  file_get_contents("cv.json");
    // var_dump($json_data);
    $cv_data = json_decode($json_data, true);
    // var_dump($cv_data);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $cv_data["name"]; ?> </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <?php include 'header.php'; ?>

        <div class='content'>
            <h1>
                <?php echo $cv_data["name"]; ?>
            </h1>
            <p>
                <?php echo $cv_data["profile"]; ?>
            </p>
            <h2>
                Contact Information
            </h2>
            <ul>
                <li>
                   Email : <?php echo $cv_data["contact_information"]["email"]; ?>
                </li>
                <li>
                   Phone : <?php echo $cv_data["contact_information"]["phone"]; ?>
                </li>
                <li>
                   Address : <?php echo $cv_data["contact_information"]["address"]; ?>
                </li>
                <li>
                    Linkedin:
                    <a href=" <?php echo $cv_data["contact_information"]["linkedin"]; ?> ">
                        <?php echo $cv_data["contact_information"]["linkedin"]; ?>
                    </a>
                </li>
                <li>
                    website:
                    <a href=" <?php echo $cv_data["contact_information"]["website"]; ?> ">
                        <?php echo $cv_data["contact_information"]["website"]; ?>
                    </a>
                </li>
            </ul>
            <h2>
                Skills
            </h2>
            <ul>
                <?php foreach($cv_data["skills"] as $skill): ?>
                    <li>
                        <?php echo $skill; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h2>
                Experience
            </h2>
            <?php foreach($cv_data["experience"] as $job): ?>
                <h3>
                    <?php echo $job["position"]; ?> at <?php echo $job["company"]; ?> <?php echo $job["duration"]; ?>
                </h3>
                <p>
                    <?php echo $job["location"]; ?>
                </p>
                <ul>
                    <?php foreach($job["responsibilities"] as $respons ): ?>
                    <li>
                        <?php echo $respons; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>

            <h1>
                Education
            </h1>

            <h3>
                <?php foreach($cv_data["education"] as $edu ): ?>
                    <p>  
                        <?php echo $edu["degree"]; ?> - <?php echo $edu["location"] ?>
                    </p>
                    <small>
                        Graduated in <?php echo $edu["graduation_year"]; ?>
                    </small>
                <?php endforeach; ?>
            </h3>

            <h1>
                Certifications
            </h1>
            <ul>
                <?php foreach($cv_data["certifications"] as $certifi ): ?>
                    <li>
                        <?php echo $certifi["name"]; ?> ( <?php echo $certifi["issue_date"]; ?> ) - <?php echo $certifi["issuing_organization"]; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h1>
                Languages
            </h1>

            <ul>
                <?php foreach($cv_data["languages"] as $language): ?>
                    <li>
                        <?php echo $language; ?>
                    </li>
                <?php endforeach; ?>    
            </ul>

            <h1>
                Projects
            </h1>

            <div>
                <?php foreach($cv_data["projects"] as $project): ?>
                    <h3>
                        <?php echo $project["name"];?>
                    </h3>
                    <p>
                        <?php echo $project["description"] ?>
                    </p>
                    <P>
                        Technologies used: 
                        <?php foreach($project["technologies"] as $tec): ?>
                            <?php echo $tec; ?>
                        <?php endforeach; ?>    
                    </P>
                <?php endforeach; ?>    
            </div>
            <h1>
                Reference
            </h1>
            <ul>
                <?php foreach($cv_data["references"] as $ref ): ?>
                    <li>
                        <?php echo $ref["name"]; ?> - <?php echo $ref["position"]; ?>, <?php echo $ref["phone"]; ?> 
                    </li>
                <?php endforeach; ?>
            </ul>   
        </div>

    <?php include 'footer.php'; ?>   
</body>

</html>