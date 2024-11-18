using Xamarin.Forms;

namespace XamGenerateCV
{
    public partial class App : Application
    {
        public App()
        {
            InitializeComponent();

            // Establecer la página principal con un NavigationPage
            MainPage = new NavigationPage(new MainPage())
            {
                // Cambiar el color de fondo de la barra de navegación
                BarBackgroundColor = (Color)Application.Current.Resources["LightBlue"], // Usando el color LightBlue
                BarTextColor = Color.White // Color blanco para el texto de la barra de navegación
            };
        }

        protected override void OnStart()
        {

        }

        protected override void OnSleep()
        {

        }

        protected override void OnResume()
        {

        }
    }
}
