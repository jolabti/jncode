<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashmodel extends CI_Model
{
    public function dm_login($email, $password)
    {
        $this->db->where('user_email', $email);
        $this->db->where('user_password', $password);
        return $this->db->get('jncode_user')->num_rows();
    }

    public function dm_signup($data)
    {
        $this->db->insert("jncode_user", $data);
    }

    public function dm_add_portofolio()
    {
        $dataIn = array(
                "porto_id" =>"",
                "porto_name" =>"",
                "porto_keterangan" =>"",
                "porto_period" =>"",
                "porto_media_videos" =>"",
                "porto_status" =>""
          );

        $this->db->insert('jncode_porto', $data);
    }

    public function dm_add_properties()
    {
        $dataIn = array(
            "properties_id" =>"",
            "properties_name" =>"",
            "properties_detail" =>"",
            "properties_last_update" =>"",
            "properties_status" =>""

      );

        $this->db->insert('jncode_properties', $data);
    }


    public function dm_edit_properties()
    {
        $dataIn = array(
            //"properties_id" =>"",
            "properties_name" =>"",
            "properties_detail" =>"",
            "properties_last_update" =>"",
            "properties_status" =>""

      );

        $this->db->where('properties_name', "");
        $this->db->update('jncode_properties', $data);
    }

    public function dm_add_subscriber()
    {
        $dataIn = array(
          "subscribe_id" =>"",
          "subscribe_email" =>""
        );

        $this->db->insert('jncode_subscribe', $data);
    }

    public function dm_add_couser()
    {
        $dataIn = array(
            "course_id" =>"",
            "course_name" =>"",
            "course_notes" =>"",
            "course_status" =>""
          );

        $this->db->insert('jncode_course', $data);
    }

    public function db_set_meetup()
    {
        $dataIn = array(
          "meetup_id" =>"",
          "meetup_usermail" =>"",
          "meetup_date" =>"",
          "meetup_time" =>"",
          "meetup_location" =>""
        );

        $this->db->insert('jncode_meetup', $data);
    }

    public function db_change_meetup()
    {
        $dataIn = array(
          "meetup_date" =>"",
          "meetup_time" =>"",
          "meetup_location" =>""
        );


        $this->db->where('meetup_id', "");
        $this->db->update('jncode_meetup', $data);
    }
}
