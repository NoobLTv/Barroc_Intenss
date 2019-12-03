using System;
using System.Collections.Generic;
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
    }
}
