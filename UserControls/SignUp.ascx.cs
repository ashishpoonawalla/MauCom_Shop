using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class UserControls_SignUp : System.Web.UI.UserControl
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        DataClass d1 = new DataClass();
        string sqlcmd = "INSERT INTO UserInfoTBL values('" + txtUsername.Text + "','" + txtPassword0.Text + "','" + txtName.Text  + "','" + DDLSequrityQuestion.Text  + "','" + txtAnswer.Text  + "'," + txtBalance.Text  + ",'" + DateTime.Now.ToString() + "')";

        //lblError.Text  = d1.Data111(sqlcmd);

        string s1 = d1.Data111(sqlcmd);

        if (s1 == "1")
        {
            lblError.Text = "User Created Successfully";

        }
        else
        {
            lblError.Text = "User Creation Failed....";

        }
    }
}