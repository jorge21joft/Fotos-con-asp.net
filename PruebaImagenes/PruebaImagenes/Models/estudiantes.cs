namespace PruebaImagenes.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class estudiantes
    {
        [DatabaseGenerated(DatabaseGeneratedOption.None)]
        public int id { get; set; }

        [StringLength(50)]
        public string nombre { get; set; }

        [StringLength(50)]
        public string apellidos { get; set; }

        [StringLength(50)]
        public string especialidad { get; set; }

        [StringLength(50)]
        public string grado { get; set; }

        public byte[] imagen { get; set; }
    }
}
