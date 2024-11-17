using Xamarin.Forms;

namespace XamFormCV
{
    public partial class App : Application
    {
        public App()
        {
            InitializeComponent();
            // Establecer la página principal de la app
            MainPage = new NavigationPage(new MainPage());
        }
    }
}