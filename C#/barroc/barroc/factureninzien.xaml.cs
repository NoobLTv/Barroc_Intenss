using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
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
    /// Interaction logic for factureninzien.xaml
    /// </summary>
    public partial class factureninzien : Window
    {
        public factureninzien()
        {
            InitializeComponent();
        }

        private void facturenInzienButton_Click(object sender, RoutedEventArgs e)
        {
            string connStr = "server=localhost;user=root;database=barroc_intense;port=3306;password=";
            MySqlConnection conn = new MySqlConnection(connStr);
            conn.Open();

            MySqlCommand cmd = new MySqlCommand("select * from invoices", conn);
            MySqlDataReader dr = cmd.ExecuteReader();

            dataGrid.ItemsSource = dr;
        }
    }
}
