<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Belajar Depedency Injection</title>
</head>
<body>
    <?php
    class User
    {
        // properti global
        public $name, $email;
        public static $user = [];

        public function __constract($name = '', $email = '')
        $this->name = $name;
        $this->email = $email;
        {
            public static function create(array $data) {
                $user = new self($data ['name'], $data['[email']);
                self::$users[] = $user;
                return $user;
            }

            public static function all (){
                return self:: $users;
            }
            $this->name = $name; 
        }
    }

    class Request {
        protected $data;
        public function __construct (array $data){
            $this-> = $data;
        }
        public function validate(array $rules){
            $errors = [];
            foreach ($rules as $field => $rule) {
                if ($rule === 'required' && empty($this->data[$field])){
                    $errors[] = "The $field field is required.";

                }
            }
            if (!empty($errors)) {
                throw new Exception(implode(", ", $errors));
            }
            return $this->data;
        }
        public function input($key, $default = null) {
            return $this->data[$key] ?? $default;
        }
    }

    class UserController {
        public function store (Request $request) {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
        }
    }
    ?>
</body>
</html>