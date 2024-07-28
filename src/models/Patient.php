<?php

class Patient
{
    public $first_name;
    public $last_name;
    public $gender;
    public $address;
    public $phone_number;
    public $category_id;
    public $doctor_id;
    public $appointment_time;

    public function __construct($data)
    {
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->gender = $data['gender'];
        $this->address = $data['address'];
        $this->phone_number = $data['phone_number'];
        $this->category_id = $data['category_id'];
        $this->doctor_id = $data['doctor_id'];
        $this->appointment_time = $data['appointment_time'];
    }

    public static function getAll($pdo, $search, $limit, $offset) {
        $baseSql = "SELECT 
                        patients.id,
                        CONCAT(patients.first_name, ' ', patients.last_name) AS full_name,
                        patients.phone_number, patients.appointment_time,
                        CONCAT(doctors.first_name, ' ', doctors.last_name) AS doctor_name,
                        categories.name AS category_name
                    FROM patients
                    JOIN doctors ON patients.doctor_id = doctors.id
                    JOIN categories ON doctors.category_id = categories.id";
        
        if (!empty($search)) {
            $baseSql .= " WHERE CONCAT(patients.first_name, ' ', patients.last_name) LIKE :search";
        }
        
        $baseSql .= " LIMIT :limit OFFSET :offset";

        $stmt = $pdo->prepare($baseSql);
    
        if (!empty($search)) {
            $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        }
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public static function getCount($pdo, $search) {
        $baseSql = "SELECT COUNT(*) FROM patients";
        
        if (!empty($search)) {
            $baseSql .= " WHERE CONCAT(first_name, ' ', last_name) LIKE :search";
        }
        
        $stmt = $pdo->prepare($baseSql);
    
        if (!empty($search)) {
            $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        }
        $stmt->execute();
        
        return $stmt->fetchColumn();
    }
    

    public static function find($pdo, $id)
    {
        $stmt = $pdo->prepare('SELECT * FROM patients WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save($pdo)
    {
        $stmt = $pdo->prepare('INSERT INTO patients (first_name, last_name, gender, address, phone_number, category_id, doctor_id, appointment_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $this->first_name,
            $this->last_name,
            $this->gender,
            $this->address,
            $this->phone_number,
            $this->category_id,
            $this->doctor_id,
            $this->appointment_time,
        ]);
    }

    public function update($pdo, $id)
    {
        $stmt = $pdo->prepare('UPDATE patients SET first_name = ?, last_name = ?, gender = ?, address = ?, phone_number = ?, category_id = ?, doctor_id = ?, appointment_time = ? WHERE id = ?');
        $stmt->execute([
            $this->first_name,
            $this->last_name,
            $this->gender,
            $this->address,
            $this->phone_number,
            $this->category_id,
            $this->doctor_id,
            $this->appointment_time,
            $id,
        ]);
    }

    public static function delete($pdo, $id)
    {
        $stmt = $pdo->prepare('DELETE FROM patients WHERE id = ?');
        $stmt->execute([$id]);
    }
}
