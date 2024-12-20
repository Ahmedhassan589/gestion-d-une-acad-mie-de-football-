using Microsoft.AspNetCore.Mvc;
namespace YourProjectNamespace.Controllers
{
    [ApiController]
    [Route("[controller]")]
    public class ExampleController:ControllerBase
    {
        [httpGet]
        public IActionResult Get()
            {
                return ok("ceci est une reponse de lAPI.")
            }
        )
    }
}