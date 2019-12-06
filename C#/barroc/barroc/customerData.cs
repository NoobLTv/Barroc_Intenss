using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace barroc
{
}

    public class CompanyDetail
    {
        public int id { get; set; }
        public int user_id { get; set; }
        public string address { get; set; }
        public string city { get; set; }
        public string postcode { get; set; }
        public string telefoonnummer { get; set; }
        public string email { get; set; }
        public string created_at { get; set; }
        public string updated_at { get; set; }
    }

    public class customerData
    {
        public int id { get; set; }
        public int role_id { get; set; }
        public string name { get; set; }
        public string email { get; set; }
        public object email_verified_at { get; set; }
        public string created_at { get; set; }
        public string updated_at { get; set; }
        public CompanyDetail company_detail { get; set; }
    }



