using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data;
using System.Configuration;
using System.Data.SqlClient;


/// <summary>
/// Summary description for DataClass
/// </summary>
public class DataClass
{
      //DataClass d1 = new DataClass();
      //  string sqlcmd = "Insert into trantlb values('" + txtId.Text + "','" + txtname.Text + "','" + txtammount.Text + "','" + txtdate.Text + "','" + txtaccount + "','" + txtbalence.Text + "')";
      //  lbl1.Text = d1.Data111(sqlcmd);

      ////DataClass d1 = new DataClass();
      ////  string sqlcmd = "Update  bank set password= '" + txtnewpass.Text + "'  where username= '"+Session["UN"].ToString()+"'";

      ////  lbl1.Text = d1.Data111(sqlcmd);




    public string Data111(string sqlcmd)
    {
        string result = "";

        SqlConnection con1 = new SqlConnection(ConfigurationManager.ConnectionStrings["SBIDBConnectionString"].ToString());
        SqlCommand cmd = new SqlCommand(sqlcmd, con1);
        try
        {
            con1.Open();
            int x = cmd.ExecuteNonQuery();
            result = x.ToString();
        }
        catch (Exception e11)
        {
            result  = e11.Message;
        }
        finally
        {
            con1.Close();
        }

        return result;
    }





     //string sqlcmd = " select * from bank";
     //   SqlConnection con1 = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ToString());
     //   SqlCommand cmd = new SqlCommand(sqlcmd, con1);
     //   SqlDataReader reader111;
     //   try
     //   {
     //       con1.Open();
     //       reader111 = cmd.ExecuteReader();
     //       while (reader111.Read())
     //       {
     //           string un1 = reader111["username"].ToString();
     //           string ps1 = reader111["password"].ToString();
     //           string name111 = reader111["fname"].ToString();

     //           if (txtuserid.Text == un1 && txtpassword.Text == ps1)
     //           {
     //               Session["Fullname"] = name111;
     //               Session["UN"] = txtuserid.Text;
     //               Response.Redirect("main.aspx");

     //           }

     //       }

     //       txtinvalide.Text = "invailide pass ";

     //   }
     //   catch (Exception e11)
     //   {
     //       txtinvalide.Text = e11.Message;

     //   }
     //   finally
     //   {
     //       con1.Close();
     //   }


}