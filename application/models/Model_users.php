<?php

// In modele bagi NUMAI ce apeluri faci la baza de date. SELECT UPDATE ETC. NU BAGI LOGICA (if for each chestii) in MODELE !!!

class Model_users extends CI_Model
{
	public function is_user($username, $password)			//RETURN NR de randuri din DB cu nume si parola care se potrivesc cu ce ii dau eu call
	{
		
	$query = $this->db->query("SELECT nume,parola from users WHERE nume='$username' and parola='$password'");
	
	return $query->num_rows();
	
	}
		

	public function is_admin($username)			// RETURN ADMIN =1 ROW
	{
		$query = $this->db->query("SELECT auth.admin FROM auth INNER JOIN users ON users.id_auth = auth.id_admin WHERE nume=('$username') and admin=('1')");
		
		return $query->row();
	}

	public function user_data($db_username)	// VIZUALIZARE RAND CU TOATE DATELE MODIFICABILE DIN DB PENTRU $db_username-ul PASAT
	{
		$query = $this->db->query("SELECT `users`.`nume`, `users`.`email`, `users`.`telefon`, `users`.`description`,`users`.`nume_buletin`, `age`.`g_varsta`, `auth`.`admin` FROM `age` LEFT JOIN `users` ON `users`.`id_age` = `age`.`id_varsta` LEFT JOIN `auth` ON `users`.`id_auth` = `auth`.`id_admin` WHERE nume=('$db_username')");
		
		return $query->row();
	}
	
	
		public function new_edit($nume, $new)
	{
		
		$this->db->where('nume', $nume);
		$this->db->update('users', $new);
		
	}
	
	

	
	public function age($nume, $age)
	{
		$query = $this->db->query("UPDATE `users` SET `id_age` = '$age' WHERE `users`.`nume` = '$nume';");
	}
	
	public function reset_email($email, $password)
	{
		$query = $this->db->query("UPDATE `users` SET `parola` = '$password' WHERE `users`.`email` = '$email';");
	}
	
	
	
	
}
// old code incoming 


		
		// NU mai baga logica in modele astea e doar pentru sa vb cu baza de date 
	/*	if ($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	public function is_user()				// nici post aici refacere sa fie doar fetch
	{
		$this->db->where('nume', $this->input->post('username'));
		$this->db->where('parola', md5($this->input->post('password')));
		
		return $this->db->get('users');
	}
	
	
	
	*/
	 // SELECT * FROM users,auth WHERE users.id_auth=auth.id_auth 
	
	// CRED CA ASA VINE : SELECT 'users'.'nume', 'auth'.'admin' FROM 'auth' LEFT JOIN 'users' ON 'users'.'id_auth' = 'auth'.'id_admin'
	// SELECT users.nume, auth.admin FROM auth INNER JOIN users ON users.id_auth = auth.id_admin 
	
	/*$query = $this->db->query('SELECT users.nume, auth.admin FROM auth INNER JOIN users ON users.id_auth = auth.id_admin'); // LIMIT 1 dupa auth.id_admin si ' 
$row = $query->row();
echo $row->admin;

	ASTA SCOATE 1 CORECT IF ADMIN
*/





	
	