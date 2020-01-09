using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace barroc
{
    /// <summary>
    /// Interaction logic for facturenAanmaken.xaml
    /// </summary>
    public partial class facturenAanmaken : Window
    {
        MySqlConnection connection = new MySqlConnection("server=localhost;user=root;database=barroc_intense;port=3306;password=");
        public facturenAanmaken()
        {
            InitializeComponent();

        }

        public void nummeronly(TextCompositionEventArgs e)
        {
            e.Handled = new Regex("[^0-9,]").IsMatch(e.Text);
        }

        private void priceTextBox_PreviewTextInput(object sender, TextCompositionEventArgs e)
        {
            nummeronly(e);
        }

        private void sendDataButton_Click(object sender, RoutedEventArgs e)
        {
            int lease = int.Parse(leaseTextbox.Text);
            string name = string.Format(customerTextBox.Text);
            int price = int.Parse(priceTextBox.Text);

            string query = "INSERT into invoices (lease_id, name, price) VALUES ('" + lease +"','"+ name + "','"+ price +"')";
            connection.Open();
            MySqlCommand command = new MySqlCommand(query, connection);

            try
            {
                if (command.ExecuteNonQuery() == 1)
                {
                    messageLabel.Content = "Opgeslagen";
                }
                else
                {
                    messageLabel.Content = "Error tijdens opslaan";
                }
            }
            catch (Exception)
            {
                messageLabel.Content = "Corrigeer de gegevens";
            }
           
            connection.Close(); 
        }

        private void leaseTextbox_TextChanged(object sender, TextChangedEventArgs e)
        {

        }
    }
}
