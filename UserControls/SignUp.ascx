<%@ Control Language="C#" AutoEventWireup="true" CodeFile="SignUp.ascx.cs" Inherits="UserControls_SignUp" %>
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
                    <asp:TextBox ID="txtUsername" runat="server" MaxLength="50"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Password<asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" 
                        ControlToValidate="txtPassword0" ErrorMessage="*" ForeColor="Red" 
                        ValidationGroup="A1"></asp:RequiredFieldValidator>
                </td>
                <td>
                    <asp:TextBox ID="txtPassword0" runat="server" MaxLength="20" 
                        TextMode="Password"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Name<asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" 
                        ControlToValidate="txtName" ErrorMessage="*" ForeColor="Red" 
                        ValidationGroup="A1"></asp:RequiredFieldValidator>
                </td>
                <td>
                    <asp:TextBox ID="txtName" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Sequrity Question</td>
                <td>
                    <asp:DropDownList ID="DDLSequrityQuestion" runat="server" Height="20px" 
                        Width="121px">
                        <asp:ListItem></asp:ListItem>
                        <asp:ListItem>Hero</asp:ListItem>
                        <asp:ListItem>Color</asp:ListItem>
                        <asp:ListItem>Pett Name</asp:ListItem>
                    </asp:DropDownList>
                </td>
            </tr>
            <tr>
                <td>
                    Answer</td>
                <td>
                    <asp:TextBox ID="txtAnswer" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Balance</td>
                <td>
                    <asp:TextBox ID="txtBalance" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:Button ID="Button1" runat="server" onclick="Button1_Click" 
                        Text="Create User" ValidationGroup="A1" Width="97px" />
                </td>
            </tr>
        </table>
<br />
        <asp:Label ID="lblError" runat="server" ForeColor="Red"></asp:Label>
        <p>
            <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/Login.aspx">Back to Login</asp:HyperLink>
        </p>
    </ContentTemplate>
</asp:UpdatePanel>

