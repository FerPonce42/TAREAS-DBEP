using System;
using Xamarin.Forms;

namespace XamFormCV
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        // Evento que maneja la navegación hacia la página del CV
        private async void OnCvPageButtonClicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new CvPage()); // Navega a la página del CV
        }
    }
}