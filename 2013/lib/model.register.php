<?php

function dbConnect()
{
	if (option('db_conn')) return option('db_conn');
	$db = new PDO(option('db_driver'));
	option('db_conn', $db);
	return $db;
}

function registration_find_all()
{
	$db = dbConnect();
	$sql = 'SELECT * FROM registration';
	$stmt = $db->prepare($sql);
	if ($stmt->execute())
	{
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return array();
}

function registration_save($data, $unique_id = NULL)
{
	$db = dbConnect();
	$sql = 'INSERT INTO registration (`timestamp`, `ip`, `unique_id`, `data`) VALUES (:timestamp, :ip, :unique_id, :data)';
	
	$db_data = array(
		':timestamp' => time(),
		':ip' => ip2long($_SERVER["REMOTE_ADDR"]),
		':unique_id' => uniqid(),
		':data' => serialize($data),
	);

	if ($unique_id)
	{
		// Check if unique_id exists in the table
		$id_query = $db->prepare('SELECT * FROM `registration` WHERE `unique_id` = ?');
		$id_query->execute(array($unique_id));
		if ($id_query->fetch())
		{
			$sql = 'UPDATE `registration` SET `timestamp` = :timestamp, `ip` = :ip, `data` = :data WHERE `unique_id` = :unique_id';
			$db_data[':unique_id'] = $unique_id;
		}
	}

	$db->prepare($sql)->execute($db_data);
	return $db_data[':unique_id'];
}

function registration_load($unique_id)
{
	$db = dbConnect();
	$query = $db->prepare('SELECT `data` FROM `registration` WHERE `unique_id` = ?');
	
	if ($query->execute(array($unique_id)))
	{
		if ($row = $query->fetch())
		{
			return unserialize($row['data']);
		}
	}

	return array();
}

function registration_status($unique_id, $status)
{
	$db = dbConnect();
	$result = $db->prepare('UPDATE `registration` SET `status` = :status WHERE `unique_id` = :unique_id');
	$result->execute(array(
		':status' => $status,
		':unique_id' => $unique_id,
	));

	return $result->rowCount();
}

function ipn_check($txn_id, $message)
{
	$db = dbConnect();
	$query = $db->prepare('SELECT * FROM `ipn` WHERE `txn_id` = ?');

	if ($query->execute(array($txn_id)) and $query->rowCount() > 0)
	{
		return false;
	}
	else
	{
		$db->prepare('INSERT INTO `ipn` (`txn_id`, `timestamp`, `message`) VALUES (?, ?, ?)')->execute(array(
			$txn_id,
			time(),
			$message));
		return true;
	}
}