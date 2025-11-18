import { Code, Cpu, Wrench, Lightbulb, Users, TrendingUp } from 'lucide-react';

interface SkillCategory {
  title: string;
  icon: React.ReactNode;
  skills: string[];
}

export default function Skills() {
  const skillCategories: SkillCategory[] = [
    {
      title: "Programming",
      icon: <Code size={24} />,
      skills: ["Python", "HTML", "CSS"]
    },
    {
      title: "Engineering Tools",
      icon: <Wrench size={24} />,
      skills: ["SolidWorks", "Fusion 360", "3D Printing"]
    },
    {
      title: "Robotics & Hardware",
      icon: <Cpu size={24} />,
      skills: ["Drone", "Servos", "Motors", "Batteries"]
    },
    {
      title: "Technical Skills",
      icon: <Lightbulb size={24} />,
      skills: ["Computer Aided Design", "Web Development", "Computer Vision"]
    },
    {
      title: "Soft Skills",
      icon: <Users size={24} />,
      skills: ["Team Leadership", "Project Management", "Public Speaking", "Problem Solving"]
    },
    {
      title: "Methodologies",
      icon: <TrendingUp size={24} />,
      skills: ["Agile", "Design Thinking", "Research Methods", "Prototyping", "Testing & Validation"]
    }
  ];

  return (
    <section id="skills" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Skills & Expertise
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Technical and professional skills developed through projects, coursework, and competitions
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {skillCategories.map((category, index) => (
            <div
              key={index}
              className="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-200"
            >
              <div className="flex items-center gap-3 mb-4">
                <div className="p-3 bg-blue-100 text-blue-600 rounded-lg">
                  {category.icon}
                </div>
                <h3 className="text-xl font-bold text-gray-900">
                  {category.title}
                </h3>
              </div>
              <ul className="space-y-2">
                {category.skills.map((skill, i) => (
                  <li
                    key={i}
                    className="flex items-center text-gray-700"
                  >
                    <span className="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                    {skill}
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        <div className="mt-16 bg-white rounded-xl p-8 shadow-md border border-gray-200">
          <h3 className="text-2xl font-bold text-gray-900 mb-6 text-center">
            Certifications & Achievements
          </h3>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div className="flex items-start gap-4">
              <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <TrendingUp className="text-blue-600" size={24} />
              </div>
              <div>
                <h4 className="font-semibold text-gray-900 mb-1">
                  First Place JPL Invention Challenge Regionals, Fifth Place Finals
                </h4>
                <p className="text-gray-600 text-sm">
                  Team design lead for regional competition among college and high school teams, advanced to finals
                </p>
              </div>
            </div>
            <div className="flex items-start gap-4">
              <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <TrendingUp className="text-blue-600" size={24} />
              </div>
              <div>
                <h4 className="font-semibold text-gray-900 mb-1">
                  Certified SOLIDWORKS Associate certification (CSWA)
                </h4>
                <p className="text-gray-600 text-sm">
                  Official certification for entry-level modeling on SolidWorks
                </p>
              </div>
            </div>
            <div className="flex items-start gap-4">
              <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <TrendingUp className="text-blue-600" size={24} />
              </div>
              <div>
                <h4 className="font-semibold text-gray-900 mb-1">
                  Certified SOLIDWORKS Professional (CSWP)
                </h4>
                <p className="text-gray-600 text-sm">
                  Studying for the official certification for advanced-level modeling on SolidWorks
                </p>
              </div>
            </div>
            <div className="flex items-start gap-4">
              <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <TrendingUp className="text-blue-600" size={24} />
              </div>
              <div>
                <h4 className="font-semibold text-gray-900 mb-1">
                   AP Physics and Calculus BC
                </h4>
                <p className="text-gray-600 text-sm">
                  Completing advanced coursework with honors
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
