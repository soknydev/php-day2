<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        
        /* នៅក្នុង SEO (Search Engine Optimization) slug ជាផ្នែកមួយនៃ 
        URL(Uniform Resource Locator) នៅបន្ទាប់ពី domain name 
        សម្រាប់សម្គាល់វេបផេកណាមួយក្នុងទម្រង់ងាយអានទាំងមនុស្សនិងម៉ាស៊ីន ។ */

        function generateSlug($string, $maxLength = 50) {

            // strtolower ជាមុខងារក្នុង php ដូរឃ្លាជាអក្សរតូច

            $string = strtolower($string);
            
            /* preg_replace ជាមុខងារប្រើកន្សោមទៀតទាត់(regular expression)ជំនួសអ្វីមួយដោយអក្សរ ដូចជាជំនួសអ្វីដែលមិនមែនអក្សរ(aដល់z) មិនមែនលេខ មិនមែនសញ្ញាមើលមិនឃើញដូចជា space, tab, enter ។ល។ ដោយឃ្លាទទេ(មានន័យថាលុបអ្វីមិនមែនអក្សរលេខនិងសញ្ញាមើលមិនឃើញ)។
            
            / និង / សម្គាល់ផ្តើមនិងបញ្ចប់នៃកន្សោមទៀតទាត់
            
            [ និង ] សម្គាល់ចន្លោះ
            
            a-z0-9 សម្គាល់ចន្លោះផ្តើមពីអក្សរ a ដល់ z នឹង 0 ដល់ ៩
            
            \s សម្គាល់មិនមែនដកសញ្ញាមើលមិនឃើញ(white space)ដូចជា space, tab, enter ។ល។
            
            ^ មានន័យថាមិនឬមិនមែន
            
            */

            $string = preg_replace('/[^a-z0-9\s]/', '', $string);

            // ជំនួសដកឃ្លាច្រើនដោយដកឃ្លាតែមួយ $string = preg_replace('/\s+/', '', $string);
            
            // Trim មុខងារលុបសញ្ញាដកឃ្លានៅខាងមុខនិងខាងក្រោយឃ្លា
            
            $string = trim($string);
            
            //substr មុខងារកាត់យកត្រឹម៥០អក្សរប៉ុណ្ណោះ។ $string = substr($string, 0, $maxLength);
            
            // str_replace ជំនួសអ្វីមួយដោយអក្សរដូចជាជំនួសដកឃ្លាដោយសញ្ញា -
            
            $slug = str_replace(' ', '-', $string);
            
            return $slug;
            
            }
            
            

    ?>


    <h1>PHP - string</h1>
    <p class="lead">!Clean & Efficient PHP Code in 2025!</p>
    <div class="alert alert-secondary" role="alert">
    <?=generateSlug("!Clean & Efficient PHP Code in 2025!")?>
    </div>
    <p class="lead">How to Write Clean & Efficient PHP Code for Beginners in 2025!</p>
    <div class="alert alert-secondary" role="alert">
    <?=generateSlug("How to Write Clean & Efficient PHP Code for Beginners in 2025!")?>
    </div>
    <script src="../script/bootstrap.bundle.js"></script>

    
</body>
</html>