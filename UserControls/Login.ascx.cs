using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Configuration;
using System.Data.SqlClient;

public partial class UserControls_Login : System.Web.UI.UserControl
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        if (Page.IsValid)
        {
            string sqlcmd = "select * from UserInfoTBL";
            SqlConnection con1 = new SqlConnection(ConfigurationManager.ConnectionStrings["SBIDBConnectionString"].ToString());
            SqlCommand cmd = new SqlCommand(sqlcmd, con1);
            SqlDataReader reader111;


            try
            {
                con1.Open();
                reader111 = cmd.ExecuteReader();
                while (reader111.Read())
                {
                    string un1 = reader111["username"].ToString();
                    string ps1 = reader111["password"].ToString();
                    string name111 = reader111["fullname"].ToString();


                    if (txtUsername.Text  == un1 && txtPassword.Text   == ps1)
                    {
                        Session["Fullname"] = name111;
                        Session["UN"] = txtUsername.Text ;
                        Response.Redirect("Main.aspx");

                    }

                }

                lblError.Text  = "invailide username or password ";

            }
            catch (Exception e11)
            {
                lblError.Text  = e11.Message;

            }
            finally
            {
                con1.Close();
            }
         

        }
    }
}