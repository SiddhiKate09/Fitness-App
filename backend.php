<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $goal = $_POST['goal'];
    
    $bmi = $weight / (($height / 100) ** 2);
    
    $calories = [
        "lose weight" => 1800,
        "build muscle" => 2800,
        "cardio" => 2200,
        "flexibility" => 2000
    ];
    
    $workouts = [
        "lose weight" => "Cardio + HIIT for 30 mins",
        "build muscle" => "Strength Training: 4 sets of 8 reps",
        "cardio" => "Jogging + Cycling for 40 mins",
        "flexibility" => "Yoga & Stretching for 20 mins"
    ];
    
    $recommended_workout = $workouts[$goal] ?? "General fitness routine";
    $recommended_calories = $calories[$goal] ?? 2000;
    
    echo json_encode(["bmi" => round($bmi, 2), "calories" => $recommended_calories, "workout" => $recommended_workout]);
}
?>