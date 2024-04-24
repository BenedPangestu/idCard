<?php 
    if (isset($_POST['submit'])) {
        $card_id = $_POST['card_id'];
        $image_card = $_POST['image_card'];
        
        $sql = "INSERT INTO users (card_id, image_card) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $card_id, $gambar);
        
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $conn->error;
        }
        
        $stmt->close();
    } 
?>