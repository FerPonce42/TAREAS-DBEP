using System;
using Xamarin.Forms;

namespace XamGenerateCV
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private async void OnCvPageButtonClicked(object sender, EventArgs e)
        {
            // Recolectamos los datos de los campos
            var name = nameEntry.Text;
            var position = positionEntry.Text;
            var phone = phoneEntry.Text;
            var email = emailEntry.Text;
            var country = countryEntry.Text;
            var linkedin = linkedinEntry.Text;
            var languages = languageEntry.Text;
            var skills = skillsEntry.Text;
            var profile = profileEntry.Text;
            var experience = experienceEntry.Text;
            var education = educationEntry.Text;

            // Para la imagen de perfil, usamos un archivo predeterminado si no se selecciona ninguno
            var imagePath = "placeholder.jpg"; // Ruta a una imagen predeterminada
            if (!string.IsNullOrEmpty(selectedImagePath)) // Verificar si el usuario seleccionó una imagen
            {
                imagePath = selectedImagePath;
            }

            // Creamos una instancia de CvPage y le pasamos los datos
            var cvPage = new CvPage(name, position, phone, email, country, linkedin, languages, skills, profile, experience, education, imagePath);
            await Navigation.PushAsync(cvPage); // Navega a la página del CV
        }

        // Variable para almacenar la ruta de la imagen seleccionada
        private string selectedImagePath;

        // Método para seleccionar la imagen de perfil
        private async void OnSelectImageButtonClicked(object sender, EventArgs e)
        {
            // Esto es un ejemplo de lógica para seleccionar una imagen. La implementación específica depende de la plataforma.
            // Puedes usar librerías como Xamarin.Essentials o Plugins.Media para manejar esto.
            selectedImagePath = "ruta/a/imagen/seleccionada.jpg"; // Simula la selección de una imagen
            await DisplayAlert("Imagen seleccionada", "La imagen de perfil ha sido seleccionada con éxito.", "OK");
        }
    }
}
