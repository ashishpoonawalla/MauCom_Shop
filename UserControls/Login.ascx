<%@ Control Language="C#" AutoEventWireup="true" CodeFile="Login.ascx.cs" Inherits="UserControls_Login" %>
<style type="text/css">
    .style1
    {
        width: 249px;
        background-color: #CCCCCC;
        height: 117px;
    }
</style>

<asp:UpdatePanel ID="UpdatePanel1" runat="server">
    <ContentTemplate>
        <table cellpadding="4" cellspacing="4" class="style1">
            <tr>
                <td>
                    Username<asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                        ControlToValidate="txtUsername" ErrorMessage="*" ForeColor="Red" 
                        ValidationGroup="A1"></asp:RequiredFieldValidator>
                </td>
                <td>
                    <asp:TextBox ID="txtUsername" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Password<asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                        ControlToValidate="txtPassword" ErrorMessage="*" ForeColor="Red" 
                        ValidationGroup="A1"></asp:RequiredFieldValidator>
                </td>
                <td>
                    <asp:TextBox ID="txtPassword" runat="server" TextMode="Password"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:Button ID="Button1" runat="server" onclick="Button1_Click" Text="Login" 
                        ValidationGroup="A1" Width="58px" />
                </td>
            </tr>
        </table>
<br />
        <asp:Label ID="lblError" runat="server" ForeColor="Red"></asp:Label>
        <p>
            <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/Signup.aspx">New User Sign Up</asp:HyperLink>
        </p>
    </ContentTemplate>
</asp:UpdatePanel>



